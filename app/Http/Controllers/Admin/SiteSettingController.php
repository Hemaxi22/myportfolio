<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteSettingController extends Controller
{
    public function index(): View
    {
        $settings = SiteSetting::orderBy('key')->get();
        $resumePath = SiteSetting::where('key', 'resume_path')->value('value');

        return view('admin.settings.index', compact('settings', 'resumePath'));
    }

    public function updateResume(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'resume_path' => ['required', 'string', 'max:255'],
        ]);

        SiteSetting::updateOrCreate(
            ['key' => 'resume_path'],
            ['value' => $validated['resume_path']]
        );

        return redirect()->route('admin.settings.index')->with('status', 'Resume path updated.');
    }
}
