<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex m-2 p-2">
              <a href="{{ route('admin.tables.index') }}"
                  class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Table Index</a>
          </div>
          <div class="container mx-auto p-4 bg-slate-100 rounded-lg shadow-md">
              <h2 class="text-2xl font-bold mb-4">Create a New Table</h2>
              <form method="POST" action="{{ route('admin.tables.store') }}">
                  @csrf
                  <div class="mb-4">
                      <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                      <input type="text" id="name" name="name"
                          class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm sm:leading-5" />
                      @error('name')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-4">
                      <label for="guest_number" class="block text-sm font-medium text-gray-700">Guest Number</label>
                      <input type="number" id="guest_number" name="guest_number"
                          class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm sm:leading-5" />
                      @error('guest_number')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-4">
                      <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                      <select id="status" name="status" class="form-multiselect block w-full mt-1">
                          @foreach (App\Enums\TableStatus::cases() as $status)
                          <option value="{{ $status->value }}">{{ $status->name }}</option>
                          @endforeach
                      </select>
                      @error('status')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-4">
                      <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                      <select id="location" name="location" class="form-multiselect block w-full mt-1">
                          @foreach (App\Enums\TableLocation::cases() as $location)
                          <option value="{{ $location->value }}">{{ $location->name }}</option>
                          @endforeach
                      </select>
                      @error('location')
                      <div class="text-sm text-red-400">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mt-6 p-4">
                      <button type="submit"
                          class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</x-admin-layout>
