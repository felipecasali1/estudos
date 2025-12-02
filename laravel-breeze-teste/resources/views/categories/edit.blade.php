<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Edit your category!") }}
                </div>
            </div>
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="pt-6 pl-6 pr-6 text-gray-900 font-semibold justify-between flex">
                    <div class="text-xl">{{ __('Edit Category') }}</div>
                    <a href="{{ route('categories.index') }}">
                        <x-primary-button>{{ __('My Categories') }}</x-primary-button>
                    </a>
                </div>
                <div class="pb-6 pl-6 pr-6 text-gray-900 font-semibold">
                    <form action="{{ route('categories.update', $category) }}" method="POST" class="w-full">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-3">
                            <div class="block mt-6">
                                <label class="block">{{ __('Name') }}</label>
                                <input type="text" name="name" placeholder="{{ __('Name') }}"
                                    value="{{ $category->name }}" required>
                            </div>
                            <div class="block mt-6">
                                <label class="block">{{ __('Description (Optional)') }}</label>
                                <input type="text" name="description" placeholder="{{ __('Description') }}"
                                    value="{{ $category->description }}">
                            </div>
                        </div>
                        <div class="mt-6 justify-center text-center">
                            <x-primary-button type="submit">
                                {{ __('Edit Category') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>