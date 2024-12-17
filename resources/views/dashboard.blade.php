<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Festivals') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-5">
                @foreach($festivals as $festival) @endforeach
                <h2 class="text-4xl font-extrabold dark:text-white">Payments tool for companies</h2>
                <p class="my-4 text-lg text-gray-500">Start developing with an open-source library of over 450+ UI components, sections, and pages built with the utility classes from Tailwind CSS and designed in Figma.</p>
                <p class="mb-4 text-lg font-normal text-gray-500 dark:text-gray-400">Deliver great service experiences fast - without the complexity of traditional ITSM solutions. Accelerate critical development work, eliminate toil, and deploy changes with ease.</p>
                <a href="#" class="inline-flex items-center text-lg text-blue-600 dark:text-blue-500 hover:underline">
                    Read more
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>

                {{--                    <table class="w-full text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">--}}
{{--                        <thead class="text-lg text-left text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">--}}
{{--                        <tr>--}}
{{--                            <th scope="col" class="px-6 py-3">Name</th>--}}
{{--                            <th scope="col" class="px-6 py-3">Genre</th>--}}
{{--                            <th scope="col" class="px-6 py-3">Info</th>--}}
{{--                            <th scope="col" class="px-6 py-3">Date</th>--}}
{{--                            <th scope="col" class="px-6 py-3">Order</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach ($festivals as $festival)--}}
{{--                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">--}}
{{--                                <th scope="row" class="mx-6 my-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $festival->name }}</th>--}}
{{--                                <td class="mx-6 my-4">{{ $festival->genre }}</td>--}}
{{--                                <td class="mx-6 my-4">{{ $festival->info }}</td>--}}
{{--                                <td class="mx-6 my-4">{{ $festival->date }}</td>--}}
{{--                                <th class="mx-6 my-4"><a href="#">Order</a></th>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
            </div>
        </div>
    </div>
</x-app-layout>
