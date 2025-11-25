<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Manage your products!") }}
                </div>
            </div>
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 font-semibold justify-between flex">
                    <div class="text-xl font-semibold">Products</div>
                    <a href="{{ route('products.create') }}">
                        <x-primary-button>{{ __('New Product') }}</x-primary-button>
                    </a>
                </div>
                <div class="p-6 text-gray-900">
                    <table class="w-full">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>User</th>
                        </tr>
                        @forelse ($products as $product)

                        @empty
                            <tr>
                                <td colspan="7" class="text-center pt-6 text-red-500 font-semibold">
                                    {{ __('No Products Found!') }}
                                </td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>