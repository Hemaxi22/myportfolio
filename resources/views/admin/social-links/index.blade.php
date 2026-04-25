<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Social Links</h2>
            <a href="{{ route('admin.social-links.create') }}" class="rounded bg-indigo-600 px-4 py-2 text-white">Add Link</a>
        </div>
    </x-slot>
    <div class="py-8">
        <div class="mx-auto max-w-5xl px-4">
            <div class="overflow-x-auto rounded-xl bg-white shadow">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-100"><tr><th class="p-3 text-left">Platform</th><th class="p-3 text-left">URL</th><th class="p-3">Actions</th></tr></thead>
                    <tbody>
                    @foreach($links as $link)
                        <tr class="border-t">
                            <td class="p-3">{{ $link->platform }}</td>
                            <td class="p-3">{{ $link->url }}</td>
                            <td class="p-3 text-center">
                                <a href="{{ route('admin.social-links.edit', $link) }}" class="text-indigo-600">Edit</a>
                                <form class="inline" method="POST" action="{{ route('admin.social-links.destroy', $link) }}">@csrf @method('DELETE')<button class="ml-2 text-red-600">Delete</button></form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">{{ $links->links() }}</div>
        </div>
    </div>
</x-app-layout>
