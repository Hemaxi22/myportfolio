<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SocialLinkController extends Controller
{
    public function index(): View
    {
        $links = SocialLink::orderBy('display_order')->paginate(20);

        return view('admin.social-links.index', compact('links'));
    }

    public function create(): View
    {
        return view('admin.social-links.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateRequest($request);
        $validated['is_active'] = $request->boolean('is_active', true);
        SocialLink::create($validated);

        return redirect()->route('admin.social-links.index')->with('status', 'Social link added.');
    }

    public function edit(SocialLink $socialLink): View
    {
        return view('admin.social-links.edit', compact('socialLink'));
    }

    public function update(Request $request, SocialLink $socialLink): RedirectResponse
    {
        $validated = $this->validateRequest($request);
        $validated['is_active'] = $request->boolean('is_active', true);
        $socialLink->update($validated);

        return redirect()->route('admin.social-links.index')->with('status', 'Social link updated.');
    }

    public function destroy(SocialLink $socialLink): RedirectResponse
    {
        $socialLink->delete();

        return redirect()->route('admin.social-links.index')->with('status', 'Social link deleted.');
    }

    private function validateRequest(Request $request): array
    {
        return $request->validate([
            'platform' => ['required', 'string', 'max:80'],
            'url' => ['required', 'url', 'max:255'],
            'icon' => ['nullable', 'string', 'max:100'],
            'display_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);
    }
}
