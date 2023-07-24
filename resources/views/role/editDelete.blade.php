<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Edit role data!
    </h2>
  </x-slot>
  <div class="container mx-auto flex justify-center">

    <form action="/role/{{$id}}" , method=post>
      @csrf
      @method('PUT')
      <div>
        <x-input-label for="roleName" value="Role name:" />
        <x-text-input id="roleName" class="block mt-1 w-full" type="text" name="roleName" :value=$roleName required autofocus autocomplete="roleName" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>

      <x-primary-button class="ml-4">
        {{ __('Update role data') }}
      </x-primary-button>
    </form>
    <br><br>

    <h1>Or delete that user!!!</h1>
    <form action="/role/{{$id}}" , method=post>
      @csrf
      @method('DELETE')
      <input type="hidden" name="_method" value="DELETE">

      <x-primary-button class="ml-4">
        {{ __('Delete this role !!!') }}
      </x-primary-button>
    </form>
  </div>
</x-app-layout>