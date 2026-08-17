<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SQLite Web Database Manager — Hasnain Sakib</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<style>
:root {
  --navy-950: #030712;
  --navy-900: #050c21;
  --navy-800: #0a173d;
  --navy-700: #102256;
  --cyan: #38edf8;
  --blue: #60a5fa;
  --green: #34d399;
  --ink-100: #ffffff;
  --ink-300: #e2e8f0;
  --ink-400: #94a3b8;
  --line: rgba(244, 246, 252, 0.1);
  --line-strong: rgba(244, 246, 252, 0.18);
}
* { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
body {
  background: var(--navy-950);
  color: var(--ink-300);
  display: flex;
  min-height: 100vh;
}

/* Sidebar */
.sidebar {
  width: 280px;
  background: var(--navy-900);
  border-right: 1px solid var(--line);
  padding: 24px;
  display: flex;
  flex-direction: column;
  flex-shrink: 0;
}
.brand {
  font-size: 16px;
  font-weight: 800;
  color: var(--ink-100);
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  gap: 8px;
}
.brand span {
  font-family: 'JetBrains Mono', monospace;
  font-size: 10px;
  color: var(--cyan);
  background: rgba(56, 237, 248, 0.15);
  padding: 3px 8px;
  border-radius: 4px;
  border: 1px solid rgba(56, 237, 248, 0.3);
}

.db-info {
  background: var(--navy-800);
  border: 1px solid var(--line);
  border-radius: 12px;
  padding: 14px;
  margin-bottom: 24px;
  font-size: 12px;
  font-family: 'JetBrains Mono', monospace;
}
.db-info div { margin-bottom: 6px; }
.db-info div:last-child { margin-bottom: 0; }
.db-info b { color: var(--cyan); }

.table-list-head {
  font-size: 11px;
  font-family: 'JetBrains Mono', monospace;
  text-transform: uppercase;
  color: var(--ink-400);
  letter-spacing: 0.05em;
  margin-bottom: 10px;
}
.table-menu {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 4px;
}
.table-item a {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 14px;
  color: var(--ink-300);
  text-decoration: none;
  font-size: 13.5px;
  font-family: 'JetBrains Mono', monospace;
  border-radius: 8px;
  transition: all 0.2s;
}
.table-item a:hover, .table-item.active a {
  background: var(--navy-800);
  color: var(--cyan);
  border: 1px solid var(--line-strong);
}

/* Main Content */
.main-wrapper {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  min-width: 0;
}
.topbar {
  height: 64px;
  background: var(--navy-900);
  border-bottom: 1px solid var(--line);
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 28px;
}
.topbar h2 {
  font-size: 18px;
  font-weight: 700;
  color: var(--ink-100);
  display: flex;
  align-items: center;
  gap: 10px;
}
.topbar-actions {
  display: flex;
  gap: 12px;
}
.btn-nav {
  padding: 8px 14px;
  border-radius: 8px;
  background: var(--navy-800);
  border: 1px solid var(--line-strong);
  color: var(--ink-300);
  text-decoration: none;
  font-size: 13px;
  font-weight: 500;
}
.btn-nav:hover { color: var(--cyan); border-color: var(--cyan); }

.content {
  padding: 28px;
  flex-grow: 1;
  overflow-y: auto;
}

/* Alerts */
.alert {
  padding: 14px 18px;
  border-radius: 10px;
  font-size: 13.5px;
  margin-bottom: 20px;
}
.alert-success { background: rgba(56, 237, 248, 0.15); border: 1px solid rgba(56, 237, 248, 0.3); color: var(--cyan); }
.alert-danger { background: rgba(239, 68, 68, 0.15); border: 1px solid rgba(239, 68, 68, 0.3); color: #fca5a5; }

/* SQL Console Card */
.card {
  background: var(--navy-900);
  border: 1px solid var(--line-strong);
  border-radius: 16px;
  padding: 24px;
  margin-bottom: 28px;
}
.card h3 {
  font-size: 15px;
  color: var(--ink-100);
  margin-bottom: 14px;
  font-family: 'JetBrains Mono', monospace;
}
textarea.sql-input {
  width: 100%;
  height: 90px;
  background: var(--navy-950);
  border: 1px solid var(--line-strong);
  border-radius: 10px;
  padding: 14px;
  color: var(--cyan);
  font-family: 'JetBrains Mono', monospace;
  font-size: 13.5px;
  outline: none;
  resize: vertical;

}
textarea.sql-input:focus { border-color: var(--cyan); }
.btn-query {
  margin-top: 12px;
  padding: 10px 20px;
  background: var(--cyan);
  color: #03150d;
  font-weight: 700;
  font-size: 13.5px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  float: right;
}
.btn-query:hover { background: #5cf0ac; }

/* Table Data View */
.table-card {
  background: var(--navy-900);
  border: 1px solid var(--line-strong);
  border-radius: 16px;
  overflow: hidden;
}
.table-responsive {
  overflow-x: auto;
}
table.db-table {
  width: 100%;
  border-collapse: collapse;
  text-align: left;
  font-size: 13.5px;
}
table.db-table th {
  background: rgba(16, 34, 86, 0.6);
  padding: 14px 18px;
  font-family: 'JetBrains Mono', monospace;
  font-size: 11.5px;
  color: var(--ink-400);
  text-transform: uppercase;
  border-bottom: 1px solid var(--line);
}
table.db-table td {
  padding: 14px 18px;
  border-bottom: 1px solid var(--line);
  color: var(--ink-300);
  max-width: 300px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
table.db-table tr:last-child td { border-bottom: none; }
table.db-table tr:hover td { background: rgba(244, 246, 252, 0.02); }

.btn-del {
  padding: 4px 10px;
  background: rgba(239, 68, 68, 0.15);
  border: 1px solid rgba(239, 68, 68, 0.3);
  color: #fca5a5;
  border-radius: 6px;
  cursor: pointer;
  font-size: 11px;
}
.btn-del:hover { background: rgba(239, 68, 68, 0.3); }

/* Schema Pills */
.schema-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 12px;
  margin-bottom: 24px;
}
.schema-pill {
  background: var(--navy-800);
  border: 1px solid var(--line);
  border-radius: 10px;
  padding: 12px 14px;
  font-family: 'JetBrains Mono', monospace;
  font-size: 12px;
}
.schema-pill b { color: var(--cyan); }
.schema-pill span { color: var(--blue); font-size: 11px; }
</style>
</head>
<body>

<aside class="sidebar">
  <div class="brand">
    SQLite DB Manager <span>GUI</span>
  </div>

  <div class="db-info">
    <div>Database: <b>database.sqlite</b></div>
    <div>Size: <b>{{ $dbSize }}</b></div>
    <div>Version: <b>SQLite {{ $sqliteVersion }}</b></div>
  </div>

  <div class="table-list-head">Database Tables ({{ count($tables) }})</div>
  <ul class="table-menu">
    @foreach($tables as $t)
      <li class="table-item {{ $selectedTable == $t ? 'active' : '' }}">
        <a href="{{ route('db.index', ['table' => $t]) }}">
          📄 {{ $t }}
        </a>
      </li>
    @endforeach
  </ul>
</aside>

<div class="main-wrapper">
  <header class="topbar">
    <h2>Table: <span style="color:var(--cyan); font-family:'JetBrains Mono';">{{ $selectedTable ?? 'None' }}</span> <small style="font-size:13px; font-weight:normal; color:var(--ink-400);">({{ $totalRows }} rows)</small></h2>
    <div class="topbar-actions">
      <a href="{{ route('admin.dashboard') }}" class="btn-nav">← Back to Admin Panel</a>
      <a href="{{ url('/') }}" target="_blank" class="btn-nav">🌐 View Site ↗</a>
    </div>
  </header>

  <main class="content">
    @if(session('success'))
      <div class="alert alert-success">✓ {{ session('success') }}</div>
    @endif
    @if(session('error') || session('query_error'))
      <div class="alert alert-danger">✕ {{ session('error') ?? session('query_error') }}</div>
    @endif
    @if(session('query_success'))
      <div class="alert alert-success">✓ {{ session('query_success') }}</div>
    @endif

    <!-- SQL Console Card -->
    <div class="card">
      <h3>⚡ Run SQL Query</h3>
      <form method="POST" action="{{ route('db.query') }}">
        @csrf
        <textarea name="sql_query" class="sql-input" placeholder="SELECT * FROM {{ $selectedTable ?? 'certifications' }} LIMIT 10;">{{ session('executed_query') ?? "SELECT * FROM {$selectedTable} LIMIT 20;" }}</textarea>
        <button type="submit" class="btn-query">Execute Query ⚡</button>
        <div style="clear:both;"></div>
      </form>
    </div>

    <!-- SQL Query Results if any -->
    @if(session('query_results'))
      <div class="card">
        <h3>Query Results</h3>
        <div class="table-responsive">
          <table class="db-table">
            <thead>
              <tr>
                @if(count(session('query_results')) > 0)
                  @foreach(array_keys(session('query_results')[0]) as $col)
                    <th>{{ $col }}</th>
                  @endforeach
                @endif
              </tr>
            </thead>
            <tbody>
              @foreach(session('query_results') as $r)
                <tr>
                  @foreach($r as $v)
                    <td>{{ is_array($v) || is_object($v) ? json_encode($v) : $v }}</td>
                  @endforeach
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    @endif

    <!-- Table Structure / Schema -->
    @if(!empty($schema))
      <h3 style="font-size:14px; font-family:'JetBrains Mono'; margin-bottom:12px; color:var(--ink-400);">COLUMN SCHEMA</h3>
      <div class="schema-grid">
        @foreach($schema as $col)
          <div class="schema-pill">
            <b>{{ $col->name }}</b> <span>({{ $col->type }})</span>
            @if($col->pk)<br><small style="color:var(--green);">PRIMARY KEY</small>@endif
          </div>
        @endforeach
      </div>
    @endif

    <!-- Table Data Grid -->
    <div class="table-card">
      <div class="table-responsive">
        <table class="db-table">
          <thead>
            <tr>
              @if(!empty($schema))
                @foreach($schema as $col)
                  <th>{{ $col->name }}</th>
                @endforeach
                <th>Action</th>
              @endif
            </tr>
          </thead>
          <tbody>
            @forelse($rows as $row)
              <tr>
                @foreach($schema as $col)
                  @php $colName = $col->name; @endphp
                  <td title="{{ $row->$colName ?? '' }}">{{ $row->$colName ?? 'NULL' }}</td>
                @endforeach
                <td>
                  @if(isset($row->id))
                    <form method="POST" action="{{ route('db.delete', ['table' => $selectedTable, 'id' => $row->id]) }}" style="display:inline;" onsubmit="return confirm('Delete row #{{ $row->id }}?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn-del">Delete</button>
                    </form>
                  @else
                    —
                  @endif
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="{{ count($schema) + 1 }}" style="text-align:center; color:var(--ink-400); padding:30px;">
                  No records found in table '{{ $selectedTable }}'.
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </main>
</div>

</body>
</html>
