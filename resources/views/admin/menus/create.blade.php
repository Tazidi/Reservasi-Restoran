<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex m-2 p-2">
              <a href="{{ route('admin.menus.index') }}"
                  class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Menu Index</a>
          </div>
          <div class="container mx-auto p-4 bg-slate-100 rounded-lg shadow-md">
              <h2 class="text-2xl font-bold mb-4">Create a New Menu</h2>
              <form method="POST" action="{{ route('admin.menus.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-4">
                      <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                      <input type="text" id="name" name="name"
                          class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm sm:leading-5">
                      @error('name')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-4">
                      <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                      <input type="file" id="image" name="image"
                          class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm sm:leading-5">
                      @error('image')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-4">
                      <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                      <input type="number" min="0.00" max="10000.00" step="0.01" id="price" name="price"
                          class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm sm:leading-5">
                      @error('price')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-4">
                      <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                      <textarea id="description" name="description" rows="3"
                          class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm sm:leading-5"></textarea>
                      @error('description')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-4">
                      <label for="categories" class="block text-sm font-medium text-gray-700">Categories</label>
                      <select id="categories" name="categories[]" class="form-multiselect block w-full mt-1" multiple>
                          @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div>
                      <button type="submit"
                          class="w-full px-4 py-2 bg-indigo-500 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                          Store
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</x-admin-layout>
