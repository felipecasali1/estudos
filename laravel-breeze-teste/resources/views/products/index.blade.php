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
                <div class="pb-6 pl-6 pr-6 text-gray-900">
                    <table class="w-full border-collapse">
                        <tr class="bg-gray-100">
                            <th class="border px-4 py-2 text-left">ID</th>
                            <th class="border px-4 py-2 text-left">Name</th>
                            <th class="border px-4 py-2 text-left">Price</th>
                            <th class="border px-4 py-2 text-left">Quantity</th>
                            <th class="border px-4 py-2 text-left">Description</th>
                            <th class="border px-4 py-2 text-left">Category</th>
                            <th class="border px-4 py-2 text-left">User</th>
                            <th class="border px-4 py-2 text-left">Options</th>
                        </tr>
                        @forelse ($products as $product)
                            <tr>
                                <td class="border px-4 py-2">{{ $product->id }}</td>
                                <td class="border px-4 py-2">{{ $product->name }}</td>
                                <td class="border px-4 py-2">R${{ $product->price }}</td>
                                <td class="border px-4 py-2">{{ $product->quantity }}</td>
                                <td class="border px-4 py-2">{{ $product->description ?? '-' }}</td>
                                <td class="border px-4 py-2">{{ $product->category->name }}</td>
                                <td class="border px-4 py-2">{{ $product->user->name }}</td>
                                <td class="flex border px-4 py-2 justify-center">
                                    <a href="{{ route('products.edit', $product) }}">
                                        <x-primary-button>{{ __('Edit') }}</x-primary-button>
                                    </a>
                                    <div class="w-2"></div>
                                    <form action="{{ route('products.destroy', $product) }}"
                                        onsubmit="return confirm('{{ __('Are you sure you want to delete this product?') }}')"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-primary-button type="submit">
                                            {{ __('Delete') }}
                                        </x-primary-button>
                                    </form>
                                </td>
                            </tr>
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