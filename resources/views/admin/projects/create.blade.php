<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Project</h2></x-slot>
    <div class="py-8">
        <div class="mx-auto max-w-3xl rounded-xl bg-white p-6 shadow">
            <form method="POST" action="{{ route('admin.projects.store') }}" class="space-y-4">
                @csrf
                @include('admin.projects.partials.form', ['project' => null])
            </form>
        </div>
    </div>
</x-app-layout>
