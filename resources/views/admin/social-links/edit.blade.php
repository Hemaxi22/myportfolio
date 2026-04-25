<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Social Link</h2></x-slot>
    <div class="py-8">
        <div class="mx-auto max-w-2xl rounded-xl bg-white p-6 shadow">
            <form method="POST" action="{{ route('admin.social-links.update', $socialLink) }}" class="space-y-4">
                @csrf @method('PUT')
                @include('admin.social-links.partials.form', ['socialLink' => $socialLink])
            </form>
        </div>
    </div>
</x-app-layout>
