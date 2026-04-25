<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800 leading-tight">Messages</h2></x-slot>
    <div class="py-8">
        <div class="mx-auto max-w-7xl px-4">
            @if(session('status')) <div class="mb-4 rounded bg-emerald-100 p-3 text-emerald-700">{{ session('status') }}</div> @endif
            <div class="overflow-x-auto rounded-xl bg-white shadow">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-100"><tr><th class="p-3 text-left">Name</th><th class="p-3 text-left">Subject</th><th class="p-3 text-left">Message</th><th class="p-3">Actions</th></tr></thead>
                    <tbody>
                    @foreach($messages as $message)
                        <tr class="border-t {{ $message->is_read ? '' : 'bg-indigo-50' }}">
                            <td class="p-3">{{ $message->name }}<br><span class="text-xs text-gray-500">{{ $message->email }}</span></td>
                            <td class="p-3">{{ $message->subject }}</td>
                            <td class="p-3">{{ \Illuminate\Support\Str::limit($message->message, 120) }}</td>
                            <td class="p-3 text-center">
                                <form class="inline" method="POST" action="{{ route('admin.messages.toggle-read', $message) }}">@csrf @method('PATCH')<button class="text-indigo-600">{{ $message->is_read ? 'Mark Unread' : 'Mark Read' }}</button></form>
                                <form class="inline" method="POST" action="{{ route('admin.messages.destroy', $message) }}">@csrf @method('DELETE')<button class="ml-2 text-red-600">Delete</button></form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">{{ $messages->links() }}</div>
        </div>
    </div>
</x-app-layout>
