<x-layout>
    <x-slot:heading>
        Create New Account
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-title for="first_name">First Name</x-form-title>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="first_name" placeholder="First Name" />
                            </div>
                        </div>
                        <x-form-error name="first_name" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-title for="last_name">Last Name</x-form-title>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="last_name" placeholder="Last Name" />
                            </div>
                        </div>
                        <x-form-error name="last_name" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-title for="email">Email</x-form-title>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="email" placeholder="Email" type="email" />
                            </div>
                        </div>
                        <x-form-error name="email" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-title for="password">Password</x-form-title>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="password" type="password" placeholder="********" />
                            </div>
                        </div>
                        <x-form-error name="password" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-title for="password_confirmation">Confirm Password</x-form-title>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input name="password_confirmation" type="password" placeholder="********" />
                            </div>
                        </div>
                        <x-form-error name="password_confirmation" />
                    </x-form-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Register Now</x-form-button>
        </div>
    </form>

</x-layout>
