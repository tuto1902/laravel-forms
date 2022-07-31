<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 bg-purple-400 rounded-md text-white uppercase text-xs font-semibold tracking-widest transition ease-in-out duration-150 hover:bg-purple-600']) }}>
    {{ $slot }}
</button>