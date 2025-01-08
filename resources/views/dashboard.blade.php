<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Festivals') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ( auth()->user()->role_id == 2)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-7 p-4">
                    <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Create new bus/festival</button>
                </div>
            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-5">
                @foreach($festivals as $festival)
                <h2 class="text-4xl font-extrabold dark:text-white">{{ $festival->name }}</h2>
                <p class=" text-lg text-gray-500">{{ $festival->date }}</p>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400">{{ $festival->info }}</p>
                <p class="text-lg text-gray-500">{{ $festival->genre }}</p>
                <a href="{{ route('festival.bus', $festival->id) }}" class="inline-flex items-center text-lg text-blue-600 dark:text-blue-500 hover:underline pb-5">
                    Buses
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
