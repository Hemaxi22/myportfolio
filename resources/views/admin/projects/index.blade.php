<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Projects</h2>
            <a href="{{ route('admin.projects.create') }}" class="rounded bg-indigo-600 px-4 py-2 text-white">Add Project</a>
        </div>
    </x-slot>
    <div class="py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            @if(session('status')) <div class="mb-4 rounded bg-emerald-100 p-3 text-emerald-700">{{ session('status') }}</div> @endif
            <div class="overflow-x-auto rounded-xl bg-white shadow">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-100"><tr><th class="p-3 text-left">Title</th><th class="p-3">Order</th><th class="p-3">Actions</th></tr></thead>
                    <tbody>
                    @foreach($projects as $project)
                        <tr class="border-t">
                            <td class="p-3">{{ $project->title }}</td>
                            <td class="p-3 text-center">{{ $project->display_order }}</td>
                            <td class="p-3 text-center">
                                <a class="text-indigo-600" href="{{ route('admin.projects.edit', $project) }}">Edit</a>
                                <form class="inline" method="POST" action="{{ route('admin.projects.destroy', $project) }}">@csrf @method('DELETE')<button class="ml-2 text-red-600">Delete</button></form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">{{ $projects->links() }}</div>
        </div>
    </div>
</x-app-layout>
