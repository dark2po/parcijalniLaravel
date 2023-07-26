<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Edit navigation data!
    </h2>
  </x-slot>
  <div class="container mx-auto flex justify-center">


    <form action="/navigation/{{$id}}" , method=post>
      @csrf
      @method('PUT')
      <div>
        <x-input-label for="navigationName" value="Navigation Name:" />
        <x-text-input id="navigationName" class="block mt-1 w-full" type="text" name="navigationName" :value=$navigationName required autofocus autocomplete="navigationName" />
        <x-input-error :messages="$errors->get('navigationName')" class="mt-2" />
      </div>

      <div>
        <x-input-label for="uri" value="URI:" />
        <x-text-input id="uri" class="block mt-1 w-full" type="text" name="uri" :value=$uri required autofocus autocomplete="uri" />
        <x-input-error :messages="$errors->get('uri')" class="mt-2" />
      </div>  


      <label for="page_id" class=" font-medium text-sm text-gray-700 ">Select page:</label><br>
      <select id="page_id" name="page_id" class="block mt-1 w-full">
        <option value="none" selected disabled hidden>Select an Option</option>
        @foreach ($pages as $page_id2 => $pageName)
        <option value="{{$page_id2}}" @selected($page_id2==$page_id)>"{{$pageName}}"</option>
        @endforeach
      </select>
      <br><br>

      <x-primary-button class="ml-4">
                {{ __('Update navigation data') }}
      </x-primary-button>
    </form>

    <form action="/navigation/{{$id}}" , method=post>
    @csrf
    @method('DELETE')
    <x-primary-button class="ml-4">
                {{ __('Delete Navigation !!!') }}
      </x-primary-button>
    </form>
  </div>
</x-app-layout>