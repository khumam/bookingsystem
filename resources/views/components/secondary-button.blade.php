<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn text-white bg-gray-500 border-gray-500 hover:bg-gray-600 hover:border-gray-600 focus:bg-gray-600 focus:border-gray-600 focus:ring focus:ring-gray-500/30 active:bg-gray-600 active:border-gray-600']) }}>
    {{ $slot }}
</button>
