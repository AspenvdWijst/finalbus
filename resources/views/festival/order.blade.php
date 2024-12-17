<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2>Buses for {{ $festival->name }}</h2>

                @if($festival->buses->count())
                    <ul>
                        @foreach($festival->buses as $bus)
                            <li>
                                <a href="">
                                    {{ $bus->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>No buses available for this festival.</p>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>

{{--{{ route('buses.show', ['festival' => $festival->id, 'bus' => $bus->id]) }}--}}
