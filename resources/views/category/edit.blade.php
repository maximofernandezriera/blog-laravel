<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modificar una categoria') }}
        </h2>
    </x-slot>

    @include('components.alert')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('category.update', $category->id) }}" method="post" class="mt-6 space-y-6">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="title" :value="__('Títol')" />
                            <x-text-input id="title" name="title" type="text" value="{{ $category->title }}" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="url_clean" :value="__('Url neta')" />
                            <x-text-input id="url_clean" name="url_clean" value="{{ $category->url_clean }}" type="text" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('url_clean')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="start_date" :value="__('Data inici')" />
                            <x-text-input id="start_date" name="start_date" value="{{ $category->start_date }}" type="date" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="end_date" :value="__('Data inici')" />
                            <x-text-input id="end_date" name="end_date" value="{{ $category->end_date }}" type="date" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                        </div>
                        <input type="submit" value="Modificar" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<form action="{{ route('category.update', $category->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="title">Títol</label>
    <input type="text" style="@error('title') border-color: RED;  @enderror"  value="{{ $category->title }}" name="title" />
    @error('title')
        <div>{{ $message }}</div>
    @enderror
    <label for="url_clean">Url neta</label>
    <input type="text" name="url_clean" value="{{ $category->url_clean }}" />
    @error('title')
        <div>{{ $message }}</div>
    @enderror
    <label for="start_date">Data inici</label>
    <input type=date name="start_date" value="{{$category->start_date}}" />
    <label for="end_date">Data fi</label>
    <input type=date name="end_date" value="{{$category->end_date}}" />
    <input type="submit" value="Editar" >
</form>