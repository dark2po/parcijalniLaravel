<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Create New Role!
    </h2>
  </x-slot>
  <div class="container mx-auto flex justify-center">


    <form action="/role" , method=post>
      @csrf
      <div>
        <x-input-label for="roleName" value="Role name:" />
        <x-text-input id="roleName" class="block mt-1 w-full" type="text" name="roleName" :value="old('roleName')" required autofocus autocomplete="roleName" />
        <x-input-error :messages="$errors->get('roleName')" class="mt-2" />
      </div>

      <!-- <label for="roleName">Role name:</label><br>
      <input type="text" id="roleName" name="roleName" required="required" value="{{ old('roleName') }}"><br><br> -->
      <!-- <input type="submit" value="Create new role"> -->
      <x-primary-button class="ml-4 block mt-2">
        {{ __('Create new role') }}
      </x-primary-button>
    </form>

  </div>
</x-app-layout>