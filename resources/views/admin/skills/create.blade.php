<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Skill</h2></x-slot>
    <div class="py-8">
        <div class="mx-auto max-w-3xl rounded-xl bg-white p-6 shadow">
            <form method="POST" action="{{ route('admin.skills.store') }}" class="space-y-4">
                @csrf
                @include('admin.skills.partials.form', ['skill' => null])
            </form>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Skill</h2></x-slot>
    <div class="py-8">
        <div class="mx-auto max-w-2xl rounded-xl bg-white p-6 shadow">
            <form method="POST" action="{{ route('admin.skills.store') }}" class="space-y-4">
                @csrf
                @include('admin.skills.partials.form', ['skill' => null])
            </form>
        </div>
    </div>
</x-app-layout>
