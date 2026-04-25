<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MessageController extends Controller
{
    public function index(): View
    {
        $messages = Message::latest()->paginate(20);

        return view('admin.messages.index', compact('messages'));
    }

    public function toggleRead(Message $message): RedirectResponse
    {
        $message->update(['is_read' => ! $message->is_read]);

        return back()->with('status', 'Message status updated.');
    }

    public function destroy(Message $message): RedirectResponse
    {
        $message->delete();

        return back()->with('status', 'Message deleted.');
    }
}
