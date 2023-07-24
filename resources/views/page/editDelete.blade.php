<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Edit page data or Delete Page!
    </h2>
  </x-slot>
  <div class="container mx-auto flex justify-center">


    <form action="/page/{{$id}}" , method=post>
      @csrf
      @method('PUT')
      <div>
        <x-input-label for="pageTitle" value="Page Title" />
        <x-text-input id="pageTitle" class="block mt-1 w-full" type="text" name="pageTitle" :value=$pageTitle required autofocus autocomplete="pageTitle" />
        <x-input-error :messages="$errors->get('pageTitle')" class="mt-2" />
      </div>


      <label for="pageText">Page text:</label><br>
      <textarea id="pageText" name="pageText" required="required" cols="55" rows="10">{{$pageText}}</textarea> <br><br>
      <x-input-error :messages="$errors->get('pageText')" class="mt-2" />

      <div>
        <x-input-label for="photoName" value="Photo Name" />
        <x-text-input id="photoName" class="block mt-1 w-full" type="text" name="photoName" :value=$photoName required autofocus autocomplete="photoName" />
        <x-input-error :messages="$errors->get('photoName')" class="mt-2" />
      </div>


      <div>
        <x-input-label for="photoPath" value="Photo Path" />
        <x-text-input id="photoPath" class="block mt-1 w-full" type="text" name="photoPath" :value=$photoPath required autofocus autocomplete="photoPath" />
        <x-input-error :messages="$errors->get('photoPath')" class="mt-2" />
      </div>

      <label for="user_id">Select user:</label><br>
      <select id="user_id" name="user_id">
        <option value="none" selected disabled hidden>Select an Option</option>
        @foreach ($users as $user_id2 => $name)
        <option value="{{$user_id2}}" @selected($user_id2==$user_id)>"{{$name}}"</option>
        @endforeach
      </select>
      <br><br>

      <x-primary-button class="ml-4">
        {{ __('Update page data') }}
      </x-primary-button>
    </form>
    <br><br>
    <form action="/page/{{$id}}" , method=post>
      @csrf
      @method('DELETE')
      <x-primary-button class="ml-4">
        {{ __('Delete Page !!!') }}
      </x-primary-button>
    </form>

  </div>
</x-app-layout>