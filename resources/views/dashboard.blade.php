<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-blue-500 text-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="text-5xl">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium">{{ __('Total Employees') }}</h3>
                                <p class="mt-2 text-3xl font-bold">{{ $countAllEmployees }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-green-500 text-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="text-5xl">
                                <i class="fas fa-male"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium">{{ __('Male Employees') }}</h3>
                                <p class="mt-2 text-3xl font-bold">{{ $countMale }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-pink-500 text-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="text-5xl">
                                <i class="fas fa-female"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium">{{ __('Female Employees') }}</h3>
                                <p class="mt-2 text-3xl font-bold">{{ $countFemale }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-purple-500 text-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="text-5xl">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium">{{ __('Active Employees') }}</h3>
                                <p class="mt-2 text-3xl font-bold">{{ $countActiveEmployees }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-yellow-500 text-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="text-5xl">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium">{{ __('Departments') }}</h3>
                                <p class="mt-2 text-3xl font-bold">{{ $countDepartements }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
