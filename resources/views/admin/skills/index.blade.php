<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Skills</h2>
            <a href="{{ route('admin.skills.create') }}" class="rounded bg-indigo-600 px-4 py-2 text-white">Add Skill</a>
        </div>
    </x-slot>
    <div class="py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            @if(session('status')) <div class="mb-4 rounded bg-emerald-100 p-3 text-emerald-700">{{ session('status') }}</div> @endif
            <div class="overflow-x-auto rounded-xl bg-white shadow">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3 text-left">Name</th>
                            <th class="p-3 text-left">Category</th>
                            <th class="p-3 text-center">Level</th>
                            <th class="p-3 text-center">Order</th>
                            <th class="p-3 text-center">Status</th>
                            <th class="p-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($skills as $skill)
                            <tr class="border-t">
                                <td class="p-3">{{ $skill->name }}</td>
                                <td class="p-3">{{ $skill->category ?: '-' }}</td>
                                <td class="p-3 text-center">{{ $skill->percentage }}%</td>
                                <td class="p-3 text-center">{{ $skill->display_order }}</td>
                                <td class="p-3 text-center">{{ $skill->is_active ? 'Active' : 'Inactive' }}</td>
                                <td class="p-3 text-center">
                                    <a class="text-indigo-600" href="{{ route('admin.skills.edit', $skill) }}">Edit</a>
                                    <form class="inline" method="POST" action="{{ route('admin.skills.destroy', $skill) }}">@csrf @method('DELETE')<button class="ml-2 text-red-600">Delete</button></form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">{{ $skills->links() }}</div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Skills</h2>
            <a href="{{ route('admin.skills.create') }}" class="rounded bg-indigo-600 px-4 py-2 text-white">Add Skill</a>
        </div>
    </x-slot>
    <div class="py-8">
        <div class="mx-auto max-w-5xl px-4">
            <div class="overflow-x-auto rounded-xl bg-white shadow">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-100"><tr><th class="p-3 text-left">Name</th><th class="p-3">%</th><th class="p-3">Actions</th></tr></thead>
                    <tbody>
                    @foreach($skills as $skill)
                        <tr class="border-t">
                            <td class="p-3">{{ $skill->name }}</td><td class="p-3 text-center">{{ $skill->percentage }}</td>
                            <td class="p-3 text-center">
                                <a href="{{ route('admin.skills.edit', $skill) }}" class="text-indigo-600">Edit</a>
                                <form class="inline" method="POST" action="{{ route('admin.skills.destroy', $skill) }}">@csrf @method('DELETE')<button class="ml-2 text-red-600">Delete</button></form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">{{ $skills->links() }}</div>
        </div>
    </div>
</x-app-layout>
