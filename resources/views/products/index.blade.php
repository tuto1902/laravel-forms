<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl">Products</h1>
    </x-slot>

    <div class="mb-4">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="flex flex-col py-2 align-middle min-w-full sm:px-6 lg:px-8">
                <div class="mb-4">
                    <a href="{{ route('products.create') }}" class="rounded-md px-4 py-2 bg-green-600 text-green-100 float-right ">New Product</a>
                </div>
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <div class="flex space-x-4 items-center">
                                        <a href="#">
                                            <span>Name</span>
                                        </a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <div class="flex space-x-4 items-center">
                                        <a href="#">
                                            <span>Price</span>
                                        </a>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    <div class="flex space-x-4 items-center">
                                        <a href="#">
                                            <span>In Stock</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($products as $product)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="text-purple-800 hover:underline">{{ $product->name }}</a>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $product->price }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $product->in_stock }}</div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
