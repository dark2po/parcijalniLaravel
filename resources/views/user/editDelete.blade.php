<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Edit or delete user!
    </h2>
  </x-slot>
  <div class="container mx-auto flex justify-center">

    <br>

    <form action="/user/{{$id}}" , method=post>
      @csrf
      @method('PUT')
      <div>
        <x-input-label for="name" value="User name:" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value=$name required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>
      
      <!-- <label for="name">User name:</label><br>
      <input type="text" id="name" name="name" required="required" value="{{$name}}"><br><br> -->

      <div>
        <x-input-label for="email" value="Email address:" />
        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value=$email required autofocus autocomplete="email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>
      <!-- <label for="email">Email:</label><br>
      <input type="text" id="email" name="email" required="required" value="{{$email}}"><br><br> -->

      <div>
        <x-input-label for="password" value="Password:" />
        <x-text-input id="password" class="block mt-1 w-full" type="text" name="password"  autofocus autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>
      <!-- <label for="password">Password:</label><br>
      <input type="text" id="password" name="password" ><br><br> -->

      <label for="role_id">Select role:</label><br>
      <select id="role_id" name="role_id">
        <option value="none" selected disabled hidden>Select an Option</option>
        @foreach ($roles as $role_id2 => $roleName)
        <option value="{{$role_id2}}" @selected($role_id2==$role_id)>"{{$roleName}}"</option>
        @endforeach
      </select>
      <br><br>

      <!-- <input type="submit" value="Update user data"> -->
      <x-primary-button class="ml-4">
                {{ __('Update user data') }}
      </x-primary-button>
    </form>
    <br><br>


    <form action="/user/{{$id}}" , method=post>
      @csrf
      @method('DELETE')

      <!-- <label for="name">User name:</label><br>
      <input type="text" id="name" name="name" required="required" value="{{$name}}"><br><br>
      <input type="submit" value="Delete User !!!"> -->
      <x-input-label value="Delete this user!!!" />
      <x-primary-button class="ml-4">
                {{ __('Delete User !!!') }}
      </x-primary-button>
    </form>

</div>
</x-app-layout>