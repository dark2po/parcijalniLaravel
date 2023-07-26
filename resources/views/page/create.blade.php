<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Fill with new page data!
    </h2>
  </x-slot>
  <div class="container mx-auto flex justify-center">


    <form action="/page" , method=post enctype="multipart/form-data">
      @csrf
      <div>
        <x-input-label for="pageTitle" value="Page Title" />
        <x-text-input id="pageTitle" class="block mt-1 w-full" type="text" name="pageTitle" :value="old('pageTitle')" required autofocus autocomplete="pageTitle" />
        <x-input-error :messages="$errors->get('pageTitle')" class="mt-2" />
      </div>

      <div>
      <label for="pageText" class=" font-medium text-sm text-gray-700">Page text:</label><br>
      <textarea id="pageText" name="pageText" required="required" cols="55" rows="10"  >{{ old('pageText') }}</textarea> <br><br>
      <x-input-error :messages="$errors->get('pageText')" class="mt-2" />
      </div>

      <div>
        <x-input-label for="image" value="Upload Image" />
        <div >
          <input type="file" class="form-control" id="image" name="image" nullable>
        </div>
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
      </div>


      <label for="user_id" class=" font-medium text-sm text-gray-700 ">Select user:</label><br>
      <select id="user_id" name="user_id" class="block mt-1 w-full">
        <option value="none" selected disabled hidden>Select an Option</option>
        @foreach ($users as $user_id => $name)
        <option value="{{$user_id}}" @selected($user_id==old('user_id'))>"{{$name}}"</option>
        @endforeach
      </select>
      <br><br>

      <x-primary-button class="ml-4">
        {{ __('Create new page') }}
      </x-primary-button>
    </form>
    </body>

  </div>
</x-app-layout>