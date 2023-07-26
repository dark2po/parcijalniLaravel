<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Fill with new navigation data!
    </h2>
  </x-slot>
  <div class="container mx-auto flex justify-center">

    <form action="/navigation" , method=post>
      @csrf
      <div>
        <x-input-label for="navigationName" value="Navigation Name:" />
        <x-text-input id="navigationName" class="block mt-1 w-full" type="text" name="navigationName" :value="old('navigationName')" required autofocus autocomplete="navigationName" />
        <x-input-error :messages="$errors->get('navigationName')" class="mt-2" />
      </div>

      <div>
        <x-input-label for="uri" value="URI:" />
        <x-text-input id="uri" class="block mt-1 w-full" type="text" name="uri" :value="old('uri')" required autofocus autocomplete="uri" />
        <x-input-error :messages="$errors->get('uri')" class="mt-2" />
      </div>      

      <label for="page_id" class=" font-medium text-sm text-gray-700 ">Select page:</label><br>
      <select id="page_id" name="page_id" class="block mt-1 w-full">
        <option value="none" selected disabled hidden>Select an Option</option>
        @foreach ($pages as $page_id => $pageName)
        <option value="{{$page_id}}" @selected($page_id==old('page_id'))>"{{$pageName}}"</option>
        @endforeach
      </select>
      <br><br>

      <x-primary-button class="ml-4">
                {{ __('Create new navigation') }}
      </x-primary-button>
    </form>
    </div>
</x-app-layout>