<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificationController extends Controller
{
    public function dashboard()
    {
        $totalCerts = Certification::count();
        $recentCerts = Certification::orderBy('updated_at', 'desc')->take(5)->get();
        return view('admin.dashboard', compact('totalCerts', 'recentCerts'));
    }

    public function index()
    {
        $certifications = Certification::orderBy('sort_order', 'asc')->orderBy('id', 'desc')->get();
        return view('admin.certifications.index', compact('certifications'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'issuer' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:100',
            'badge_text' => 'nullable|string|max:20',
            'credential_url' => 'nullable|url|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'sort_order' => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('certifications', 'public');
            $validated['image_path'] = 'storage/' . $path;
        }

        Certification::create($validated);

        return redirect()->route('admin.certifications.index')->with('success', 'Certification added successfully!');
    }

    public function update(Request $request, Certification $certification)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'issuer' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:100',
            'badge_text' => 'nullable|string|max:20',
            'credential_url' => 'nullable|url|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'sort_order' => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {
            // Remove old image if exists
            if ($certification->image_path && str_starts_with($certification->image_path, 'storage/')) {
                $oldStoragePath = str_replace('storage/', '', $certification->image_path);
                Storage::disk('public')->delete($oldStoragePath);
            }

            $path = $request->file('image')->store('certifications', 'public');
            $validated['image_path'] = 'storage/' . $path;
        }

        $certification->update($validated);

        return redirect()->route('admin.certifications.index')->with('success', 'Certification updated successfully!');
    }

    public function destroy(Certification $certification)
    {
        if ($certification->image_path && str_starts_with($certification->image_path, 'storage/')) {
            $oldStoragePath = str_replace('storage/', '', $certification->image_path);
            Storage::disk('public')->delete($oldStoragePath);
        }

        $certification->delete();

        return redirect()->route('admin.certifications.index')->with('success', 'Certification deleted successfully!');
    }
}
