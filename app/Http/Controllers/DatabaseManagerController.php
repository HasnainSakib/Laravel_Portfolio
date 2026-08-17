<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseManagerController extends Controller
{
    public function index(Request $request)
    {
        // Get all tables in the SQLite database
        $tablesRaw = DB::select("SELECT name FROM sqlite_master WHERE type='table' AND name NOT LIKE 'sqlite_%' ORDER BY name ASC;");
        $tables = array_map(fn($t) => $t->name, $tablesRaw);

        $selectedTable = $request->query('table', $tables[0] ?? null);
        $schema = [];
        $rows = [];
        $totalRows = 0;

        if ($selectedTable && in_array($selectedTable, $tables)) {
            // Get table structure/schema
            $schema = DB::select("PRAGMA table_info(\"{$selectedTable}\");");

            // Get total count
            $totalRows = DB::table($selectedTable)->count();

            // Get table data
            $rows = DB::table($selectedTable)->limit(100)->get();
        }

        // Database file info
        $dbPath = database_path('database.sqlite');
        $dbSize = file_exists($dbPath) ? round(filesize($dbPath) / 1024, 2) . ' KB' : 'N/A';
        $sqliteVersion = DB::select('select sqlite_version() as version')[0]->version ?? 'Unknown';

        return view('admin.db-manager', compact(
            'tables',
            'selectedTable',
            'schema',
            'rows',
            'totalRows',
            'dbPath',
            'dbSize',
            'sqliteVersion'
        ));
    }

    public function runQuery(Request $request)
    {
        $query = trim($request->input('sql_query', ''));

        if (empty($query)) {
            return back()->with('error', 'Please enter a valid SQL query.');
        }

        try {
            $isSelect = preg_match('/^\s*(SELECT|PRAGMA|EXPLAIN)/i', $query);

            if ($isSelect) {
                $results = DB::select($query);
                $queryRows = json_decode(json_encode($results), true);
                return back()->with([
                    'query_success' => 'Query executed successfully. Returned ' . count($queryRows) . ' row(s).',
                    'query_results' => $queryRows,
                    'executed_query' => $query,
                ]);
            } else {
                $affected = DB::statement($query);
                return back()->with([
                    'query_success' => 'Query executed successfully.',
                    'executed_query' => $query,
                ]);
            }
        } catch (\Exception $e) {
            return back()->with([
                'query_error' => $e->getMessage(),
                'executed_query' => $query,
            ]);
        }
    }

    public function deleteRow(Request $request, $table, $id)
    {
        try {
            DB::table($table)->where('id', $id)->delete();
            return back()->with('success', "Row #{$id} deleted from '{$table}'.");
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to delete row: ' . $e->getMessage());
        }
    }
}
