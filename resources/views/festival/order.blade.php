<x-app-layout>
    <script src="{{ asset('js/total.js')}}"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('tickets.store') }}" method="POST">
                    @csrf
                    <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight p-4">Bus to {{ $festival->name }}</h2>
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight pl-4">Bus number: {{$bus->id}}</h3>
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight pl-4">Time of departure: {{$bus->time_leave}}</h3>
                    <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight pl-4">Time of arrival: {{$bus->time_arrive}}</h3>
                    <h3 id="product-price" data-price="{{$bus->price}}" class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight pl-4">Price per ticket: ${{$bus->price}}</h3>
                    <label for="quantity" class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight p-4">Number of Tickets:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="10" class="h-7 w-20 m-2" required>
                    <h3 id="total-price" class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight pl-4 pb-4">Total: ${{$bus->price}}.00</h3>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-2"></button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.addEventListener('input', (event) => {
        if (event.target.id === 'quantity') {
            const price = parseFloat(document.getElementById('product-price').dataset.price);
            const quantity = parseInt(event.target.value) || 1;
            const total = (price * quantity).toFixed(2);
            document.getElementById('total-price').textContent = `Total: $${total}`;
        }
    });

    //Thank you ChatGPT
</script>


