<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <strong>{{ $job['title'] }}:</strong> per year salary {{ $job['salary'] }}
            </li>
        @endforeach
    </ul>
</x-layout>
