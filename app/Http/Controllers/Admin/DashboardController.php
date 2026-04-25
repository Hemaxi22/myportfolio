<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'projectsCount' => Project::count(),
            'skillsCount' => Skill::count(),
            'messagesCount' => Message::count(),
            'unreadMessages' => Message::where('is_read', false)->latest()->take(5)->get(),
        ]);
    }
}
