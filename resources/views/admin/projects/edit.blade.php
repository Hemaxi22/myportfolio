<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Project</h2></x-slot>
    <div class="py-8">
        <div class="mx-auto max-w-3xl rounded-xl bg-white p-6 shadow">
            <form method="POST" action="{{ route('admin.projects.update', $project) }}" class="space-y-4">
                @csrf @method('PUT')
                @include('admin.projects.partials.form', ['project' => $project])
            </form>
        </div>
    </div>
</x-app-layout>
