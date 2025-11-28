<a
    {{ $attributes->merge([
        'class' => 'relative inline-flex items-center bg-gray-900 hover:bg-gray-700 rounded-md px-4 py-1.5 text-white',
    ]) }}>
    {{ $slot }}
</a>
