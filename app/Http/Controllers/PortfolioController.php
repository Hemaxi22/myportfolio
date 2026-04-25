<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SiteSetting;
use App\Models\Skill;
use App\Models\SocialLink;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $skills = Skill::where('is_active', true)->orderBy('display_order')->get();
        $projects = Project::where('is_active', true)->orderBy('display_order')->get();
        $socialLinks = SocialLink::where('is_active', true)->orderBy('display_order')->get();
        $resumePath = SiteSetting::query()->where('key', 'resume_path')->value('value');

        return view('portfolio.index', compact('skills', 'projects', 'socialLinks', 'resumePath'));
    }

    public function thankYou(): View
    {
        return view('pages.thank-you');
    }
}
