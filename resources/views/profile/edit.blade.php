<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                @if (Auth::check())
                    <div class="text-white">
                        Points: <br> {{ Auth::user()->points }}
                    </div>
                @endif
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="text-white">
                        <div class="text-white">
                            <h3 class="text-lg font-semibold">Purchased bus trips:</h3>
                            <table class="w-full text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-lg text-left text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Number</th>
                                        <th scope="col" class="px-6 py-3">Leave</th>
                                        <th scope="col" class="px-6 py-3">Arrive</th>
                                        <th scope="col" class="px-6 py-3">Festival</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user->buses as $bus)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $bus->id }}</th>
                                            <td>{{ $bus->time_leave }}</td>
                                            <td>{{ $bus->time_arrive }}</td>
                                            <td>{{ $bus->festival ? $bus->festival->name : 'N/A' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

