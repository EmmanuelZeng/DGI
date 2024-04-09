<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="font-medium">Tous les utilisateurs</div>
                    <div class="overflow-hidden">
                        <table class="w-full min-w-[540px]">
                            <thead>
                                <tr>
                                    <th>Nom utilisateur</th>
                                    <th>Email utilisateur</th>
                                    <th>Rôle utilisateur</th>
                                    <th>Zone utilisateur</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <div class="flex">
                                                <span class="text-gray-400 font-medium ml-2 text-uppercase ">
                                                    {{ $user->name }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span
                                                class="text-[13px] font-medium text-gray-400">{{ $user->email }}</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span
                                                class="text-[13px] font-medium text-gray-400">{{ $user->role }}</span>
                                        </td>
                                        <td class="py-2 px-4 border-b border-b-gray-50">
                                            <span
                                                class="text-[13px] font-medium text-gray-400">{{ $user->zone }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div
                    class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
                    <form
                        class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg"
                        method="POST" action="{{ route('dashboard') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Role User -->
                        <div class="mt-4">
                            <x-input-label for="role" :value="__('Role')" />
                            <x-text-input id="role" class="block mt-1 w-full" type="text" name="role"
                                :value="old('role')" required autocomplete="user role" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Zone User -->
                        <div class="mt-4">
                            <x-input-label for="zone" :value="__('Zone de l\'utilisateur')" />
                            <x-text-input id="zone" class="block mt-1 w-full" type="text" name="zone"
                                :value="old('zone')" required autocomplete="user zone" />
                            <x-input-error :messages="$errors->get('zone')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <x-primary-button class="ms-4">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
