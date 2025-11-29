<x-layout>
    <x-slot:heading>Edit Job: {{ $job->title }}</x-slot:heading>

    <form method="POST" action='/jobs/{{ $job->id }}'>
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-title for="title">Title</x-form-title>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="title" placeholder="Job Title" value="{{ $job->title }}" />
                            </div>
                        </div>
                        <x-form-error name="title" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-title for="salary">Salary</x-form-title>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="salary" placeholder="50000" value="{{ $job->salary }}" />
                            </div>
                        </div>
                        <x-form-error name="salary" />
                    </x-form-field>
                </div>

                {{-- @if ($errors->any())
                    <div class="mt-5">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li><span class="text-red-500">{{ $error }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
            </div>
        </div>

        <div class="flex justify-between">
            <div class="flex items-center">
                <button form="delete-form" type="submit"
                    class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/jobs/{{ $job->id }}" type="button"
                    class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <x-form-button>Update</x-form-button>
            </div>
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
