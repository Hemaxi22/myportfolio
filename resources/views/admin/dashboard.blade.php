<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Admin Dashboard</h2>
    </x-slot>

    <div class="py-10">
        <div class="mx-auto max-w-7xl space-y-6 px-4 sm:px-6 lg:px-8">
            @if(session('status'))
                <div class="rounded-md bg-emerald-100 p-3 text-emerald-700">{{ session('status') }}</div>
            @endif

            <div class="grid gap-4 md:grid-cols-3">
                <div class="rounded-xl bg-white p-5 shadow">Projects: <strong>{{ $projectsCount }}</strong></div>
                <div class="rounded-xl bg-white p-5 shadow">Skills: <strong>{{ $skillsCount }}</strong></div>
                <div class="rounded-xl bg-white p-5 shadow">Messages: <strong>{{ $messagesCount }}</strong></div>
            </div>

            <div class="rounded-xl bg-white p-6 shadow">
                <h3 class="text-lg font-semibold">Quick Links</h3>
                <div class="mt-4 flex flex-wrap gap-3">
                    <a class="rounded bg-indigo-600 px-4 py-2 text-white" href="{{ route('admin.projects.index') }}">Manage Projects</a>
                    <a class="rounded bg-indigo-600 px-4 py-2 text-white" href="{{ route('admin.skills.index') }}">Manage Skills</a>
                    <a class="rounded bg-indigo-600 px-4 py-2 text-white" href="{{ route('admin.social-links.index') }}">Manage Social Links</a>
                    <a class="rounded bg-indigo-600 px-4 py-2 text-white" href="{{ route('admin.messages.index') }}">Manage Messages</a>
                    <a class="rounded bg-indigo-600 px-4 py-2 text-white" href="{{ route('admin.settings.index') }}">Settings</a>
                </div>
            </div>

            @if($unreadMessages->isNotEmpty())
                <div class="rounded-xl bg-white p-6 shadow">
                    <h3 class="text-lg font-semibold">Recent Unread Messages</h3>
                    <div class="mt-4 space-y-3">
                        @foreach($unreadMessages as $message)
                            <article class="rounded-lg border border-slate-200 p-4">
                                <p class="font-semibold">{{ $message->name }} <span class="font-normal text-slate-500">({{ $message->email }})</span></p>
                                <p class="mt-1 text-sm text-slate-600">{{ $message->subject }}</p>
                                <p class="mt-2 text-sm text-slate-500">{{ \Illuminate\Support\Str::limit($message->message, 120) }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
