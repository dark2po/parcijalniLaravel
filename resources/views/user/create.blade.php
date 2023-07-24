<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Create user!
    </h2>
  </x-slot>
  <div class="container mx-auto flex justify-center">

    <br>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <br>
    <form action="/user" , method=post>
      <div>
        <x-input-label for="name" value="User name:" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>
      <!-- <label for="name">User name:</label><br>
      <input type="text" id="name" name="name" required="required" value="{{ old('name') }}"> <br><br> -->
      <div>
        <x-input-label for="email" value="Email address:" />
        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <!-- <label for="email">Email address:</label><br>
      <input type="text" id="email" name="email" required="required" value="{{ old('email') }}"><br><br> -->

      <div>
        <x-input-label for="password" value="Password:" />
        <x-text-input id="password" class="block mt-1 w-full" type="text" name="password" :value="old('password')" required autofocus autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>
      <!-- <label for="password">Password:</label><br>
      <input type="text" id="password" name="password" required="required" value="{{ old('password') }}"><br><br> -->

      <label for="role_id">Select role:</label><br>
      <select id="role_id" name="role_id">
        <option value="none" selected disabled hidden>Select an Option</option>
        @foreach ($roles as $role_id => $roleName)
        <option value="{{$role_id}}" @selected($role_id==old('role_id'))>"{{$roleName}}"</option>
        @endforeach
      </select>
      <br><br>

      @csrf

      <x-primary-button class="ml-4">
                {{ __('Create new user') }}
      </x-primary-button>
      <!-- <input type="submit" value="Create new user"> -->
    </form>
  </div>
</x-app-layout>