<x-app-layout>
    <x-slot name="header">
        Create New Product
    </x-slot>

    <x-products.form method="post" action="{{ route('products.store') }}">
        <div>
            <x-label for="name" value="Product Name"></x-label>
            <x-input type="text" name="name" value="{{ old('name') }}"/>
        </div>
        <div class="mt-4">
            <x-label for="price" value="Price"></x-label>
            <x-input type="text" name="price" value="{{ old('price') }}"/>
        </div>
        <div class="mt-4">
            <x-label for="in_stock" value="In Stock"></x-label>
            <x-input type="text" name="in_stock" value="{{ old('in_stock') }}"/>
        </div>
        <div class="mt-4">
        <a href="{{ route('products.index') }}" class="px-4 py-2 bg-gray-300 rounded-md uppercase font-semibold text-xs tracking-widest">Cancel</a>
            <x-button>
                Submit
            </x-button>
        </div>
    </x-products.form>
</x-app-layout>