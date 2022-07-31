<x-app-layout>
    <x-slot name="header">
        Edit Product
    </x-slot>

    <x-products.form method="put" action="{{ route('products.update', ['product' => $product->id]) }}">
        <div>
            <x-label for="name" value="Product Name"></x-label>
            <x-input type="text" name="name" value="{{ old('name') ?? $product->name }}"/>
        </div>
        <div class="mt-4">
            <x-label for="price" value="Price"></x-label>
            <x-input type="text" name="price" value="{{ old('price') ?? $product->price }}"/>
        </div>
        <div class="mt-4">
            <x-label for="in_stock" value="In Stock"></x-label>
            <x-input type="text" name="in_stock" value="{{ old('in_stock') ?? $product->in_stock }}"/>
        </div>
        <div class="mt-4">
        <a href="{{ route('products.index') }}" class="px-4 py-2 bg-gray-300 rounded-md uppercase font-semibold text-xs tracking-widest">Cancel</a>
            <x-button>
                Submit
            </x-button>
        </div>
    </x-products.form>
</x-app-layout>