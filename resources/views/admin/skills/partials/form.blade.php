<input type="text" name="name" class="w-full rounded border-gray-300" placeholder="Skill name" value="{{ old('name', $skill->name ?? '') }}" required>
<input type="text" name="category" class="w-full rounded border-gray-300" placeholder="Category (e.g., Backend)" value="{{ old('category', $skill->category ?? '') }}">
<div class="grid gap-4 md:grid-cols-2">
    <input type="number" name="percentage" class="w-full rounded border-gray-300" placeholder="Skill percentage" min="0" max="100" value="{{ old('percentage', $skill->percentage ?? 80) }}" required>
    <input type="number" name="display_order" class="w-full rounded border-gray-300" placeholder="Display order" value="{{ old('display_order', $skill->display_order ?? 0) }}">
</div>
<label class="block"><input type="checkbox" name="is_active" value="1" @checked(old('is_active', $skill->is_active ?? true))> Active</label>
<button class="rounded bg-indigo-600 px-4 py-2 text-white">Save</button>
<input type="text" name="name" class="w-full rounded border-gray-300" placeholder="Skill Name" value="{{ old('name', data_get($skill, 'name', '')) }}" required>
<input type="text" name="category" class="w-full rounded border-gray-300" placeholder="Category" value="{{ old('category', data_get($skill, 'category', '')) }}">
<input type="number" name="percentage" min="0" max="100" class="w-full rounded border-gray-300" placeholder="Percentage" value="{{ old('percentage', data_get($skill, 'percentage', 0)) }}" required>
<input type="number" name="display_order" class="w-full rounded border-gray-300" placeholder="Display Order" value="{{ old('display_order', data_get($skill, 'display_order', 0)) }}">
<label class="block"><input type="checkbox" name="is_active" value="1" @checked(old('is_active', data_get($skill, 'is_active', true)))> Active</label>
<button class="rounded bg-indigo-600 px-4 py-2 text-white">Save</button>
