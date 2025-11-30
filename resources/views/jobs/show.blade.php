<x-layout>
    <x-slot:heading>Job</x-slot:heading>

    <h2 class='font-bold text-lg'>{{ $job->title }}</h2>

    <p>
        This job pays {{ $job->salary }} per year
    </p>

    @can('edit-job', $job)
        <x-custom-button href="/jobs/{{ $job->id }}/edit" class="mt-5">
            Edit Job
        </x-custom-button>
    @endcan
</x-layout>
