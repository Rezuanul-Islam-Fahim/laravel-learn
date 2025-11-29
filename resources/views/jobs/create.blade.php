<x-layout>
    <x-slot:heading>
        Create New Job
    </x-slot:heading>

    <form method="POST" action='/jobs'>
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of information from you.</p>

                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-title for="title">Title</x-form-title>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="title" placeholder="Job Title" />
                            </div>
                        </div>
                        <x-form-error name="title" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-title for="salary">Salary</x-form-title>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="salary" placeholder="50000" />
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

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Create</x-form-button>
        </div>
    </form>

</x-layout>
