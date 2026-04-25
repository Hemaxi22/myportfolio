<input type="text" name="platform" class="w-full rounded border-gray-300" placeholder="Platform" value="{{ old('platform', data_get($socialLink, 'platform', '')) }}" required>
<input type="url" name="url" class="w-full rounded border-gray-300" placeholder="URL" value="{{ old('url', data_get($socialLink, 'url', '')) }}" required>
<input type="text" name="icon" class="w-full rounded border-gray-300" placeholder="Icon (optional)" value="{{ old('icon', data_get($socialLink, 'icon', '')) }}">
<input type="number" name="display_order" class="w-full rounded border-gray-300" placeholder="Display Order" value="{{ old('display_order', data_get($socialLink, 'display_order', 0)) }}">
<label class="block"><input type="checkbox" name="is_active" value="1" @checked(old('is_active', data_get($socialLink, 'is_active', true)))> Active</label>
<button class="rounded bg-indigo-600 px-4 py-2 text-white">Save</button>
