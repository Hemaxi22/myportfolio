<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800 leading-tight">Settings</h2></x-slot>
    <div class="py-8">
        <div class="mx-auto max-w-3xl space-y-6 px-4">
            @if(session('status')) <div class="rounded bg-emerald-100 p-3 text-emerald-700">{{ session('status') }}</div> @endif
            <div class="rounded-xl bg-white p-6 shadow">
                <h3 class="mb-4 text-lg font-semibold">Resume Path</h3>
                <form method="POST" action="{{ route('admin.settings.resume') }}" class="space-y-4">
                    @csrf
                    <input type="text" name="resume_path" class="w-full rounded border-gray-300" placeholder="files/resume/hemaxi-rathod-resume.pdf" value="{{ old('resume_path', $resumePath) }}" required>
                    <p class="text-sm text-gray-600">Upload your PDF manually into `public/files/resume/` and set the path here.</p>
                    <button class="rounded bg-indigo-600 px-4 py-2 text-white">Save Resume Path</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
