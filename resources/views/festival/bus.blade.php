<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Buses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="w-full text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-lg text-left text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Number</th>
                        <th scope="col" class="px-6 py-3">Leave</th>
                        <th scope="col" class="px-6 py-3">Arrive</th>
                        <th scope="col" class="px-6 py-3">Price</th>
                        <th scope="col" class="px-6 py-3">Place of departure</th>
                        <th scope="col" class="px-6 py-3">Order</th>
                        @if ($userPoints > 100)
                            <th scope="col" class="px-6 py-3">Free Ticket</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($festival->buses as $bus)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $bus->id }}</th>
                            <td>{{ $bus->time_leave }}</td>
                            <td>{{ $bus->time_arrive }}</td>
                            <td>${{ $bus->price }}</td>
                            <td>{{$bus->departure}}</td>
                            <th><a href="{{ route('festival.order', ['festival' => $festival->id, 'bus' => $bus->id]) }}">Order</a></th>
                            @if ($userPoints > 100)
                                <td>
                                    <form action="{{ route('tickets.store', ['festival' => $festival->id, 'bus' => $bus->id]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="is_free_ticket" value="1">
                                        <button type="submit" class="px-4 py-2 text-white bg-green-500 hover:bg-green-700 rounded">
                                            Get Free Ticket
                                        </button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

