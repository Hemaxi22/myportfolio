<input type="text" name="title" class="w-full rounded border-gray-300" placeholder="Title" value="{{ old('title', data_get($project, 'title', '')) }}" required>
<textarea name="description" rows="4" class="w-full rounded border-gray-300" placeholder="Description" required>{{ old('description', data_get($project, 'description', '')) }}</textarea>
<input type="text" name="tech_stack" class="w-full rounded border-gray-300" placeholder="Laravel, PHP, MySQL" value="{{ old('tech_stack', isset($project) ? implode(', ', $project->tech_stack ?? []) : '') }}">
<div class="grid gap-4 md:grid-cols-2">
    <input type="url" name="github_url" class="w-full rounded border-gray-300" placeholder="GitHub URL" value="{{ old('github_url', data_get($project, 'github_url', '')) }}">
    <input type="url" name="live_url" class="w-full rounded border-gray-300" placeholder="Live URL" value="{{ old('live_url', data_get($project, 'live_url', '')) }}">
</div>
<div class="grid gap-4 md:grid-cols-2">
    <input type="number" name="display_order" class="w-full rounded border-gray-300" placeholder="Display Order" value="{{ old('display_order', data_get($project, 'display_order', 0)) }}">
    <input type="text" name="image" class="w-full rounded border-gray-300" placeholder="Image path (optional)" value="{{ old('image', data_get($project, 'image', '')) }}">
</div>
<label class="block"><input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', data_get($project, 'is_featured', false)))> Featured</label>
<label class="block"><input type="checkbox" name="is_active" value="1" @checked(old('is_active', data_get($project, 'is_active', true)))> Active</label>
<button class="rounded bg-indigo-600 px-4 py-2 text-white">Save</button>
