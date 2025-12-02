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
                    {{ __("Create a new product!") }}
                </div>
            </div>
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="pt-6 pl-6 pr-6 text-gray-900 font-semibold justify-between flex">
                    <div class="text-xl">{{ __('Create Product') }}</div>
                    <a href="{{ route('products.index') }}">
                        <x-primary-button>{{ __('My Products') }}</x-primary-button>
                    </a>
                </div>
                <div class="pb-6 pl-6 pr-6 text-gray-900 font-semibold">
                    <form action="{{ route('products.store') }}" method="POST" class="w-full">
                        @csrf
                        <div class="grid grid-cols-3">
                            <div class="block mt-6">
                                <label class="block">{{ __('Name') }}</label>
                                <input type="text" name="name" placeholder="{{ __('Name') }}" required>
                            </div>
                            <div class="block mt-6">
                                <label class="block">{{ __('Price') }}</label>
                                <input type="number" name="price" step="0.01" min="0" placeholder="{{ __('Price') }}"
                                    required>
                            </div>
                            <div class="block mt-6">
                                <label class="block">{{ __('Quantity') }}</label>
                                <input type="number" name="quantity" step="1" min="1" placeholder="{{ __('Quantity') }}"
                                    required>
                            </div>
                            <div class="block mt-6">
                                <label class="block">{{ __('Description (Optional)') }}</label>
                                <input type="text" name="description" placeholder="{{ __('Description') }}">
                            </div>
                            <div class="block mt-6">
                                <label class="block">{{ __('Category') }}</label>
                                <select name="category_id" required>
                                    @forelse ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @empty
                                        <option disabled>{{ __('No Categories Found!') }}</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="block mt-6">
                                <label class="block">{{ __('User') }}</label>
                                <select name="user_id" required>
                                    @forelse ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @empty
                                        <option disabled>{{ __('No User Found!') }}</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="mt-6 justify-center text-center">
                            <x-primary-button type="submit">
                                {{ __('Create Product') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>