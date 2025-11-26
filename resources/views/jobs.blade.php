<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li class="py-2">
                <a href="/jobs/{{ $job['id'] }}" class="block p-6 rounded-lg border border-gray-300">
                    <span class="block text-sm font-bold text-blue-500">{{ $job->employer->name }}</span>
                    <strong>
                        {{ $job['title'] }}:
                    </strong> per year salary {{ $job['salary'] }}
                </a>
            </li>
        @endforeach
    </ul>

    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
