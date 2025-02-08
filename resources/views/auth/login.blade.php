<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 px-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input type="email" name="email" id="email"  required></x-form-input>

                                <x-form-error name="email"></x-form-error>
                            </div>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 px-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <x-form-input type="password" name="password" id="password"  required></x-form-input>

                                <x-form-error name="password"></x-form-error>
                            </div>
                        </div>
                    </x-form-field>

                </div>
            </div>





            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <x-form-button>Login</x-form-button>
            </div>
    </form>

</x-layout>
