<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Create user!
    </h2>
  </x-slot>
  <div class="container mx-auto flex justify-center">

    <br>
    <br>
    <form action="/user" , method=post>
    @csrf
      <div>
        <x-input-label for="name" value="User name:" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>

      <div>
        <x-input-label for="email" value="Email address:" />
        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <div>
        <x-input-label for="password" value="Password:" />
        <x-text-input id="password" class="block mt-1 w-full" type="text" name="password" :value="old('password')" required autofocus autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <label for="role_id" class=" font-medium text-sm text-gray-700 ">Select role:</label><br>
      <select id="role_id" name="role_id" class="block mt-1 w-full">
        <option value="none" selected disabled hidden>Select an Option</option>
        @foreach ($roles as $role_id => $roleName)
        <option value="{{$role_id}}" @selected($role_id==old('role_id'))>"{{$roleName}}"</option>
        @endforeach
      </select>
      <x-input-error :messages="$errors->get('role_id')" class="mt-2" />
      <br><br>

      <x-primary-button class="ml-4">
                {{ __('Create new user') }}
      </x-primary-button>

    </form>
  </div>
</x-app-layout>