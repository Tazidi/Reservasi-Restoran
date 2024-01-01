<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.tables.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Back to Tables</a>
            </div>    
            <div class="container mx-auto p-4 bg-gray-100 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4">Add Tables</h2>
                <form enctype="multipart/form-data">
                  <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Tables</label>
                    <input type="text" id="title" wire:model.lazy="title" name="title" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm sm:leading-5">
                  </div>
                  <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" id="image" wire:model="newImage" name="image" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm sm:leading-5">
                  </div>
                  <div class="mb-4">
                    <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="body" rows="3" wire:model.lazy="body" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm sm:leading-5"></textarea>
                  </div>
                  <div>
                    <button type="submit" class="w-full px-4 py-2 bg-indigo-500 text-white rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Submit
                    </button>
                  </div>
                  
                </form>
              </div>
               
        </div>
    </div>
</x-admin-layout>
