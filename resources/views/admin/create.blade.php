<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <x-success-status class="mb-4" :status="session('message')" />
                <form action="{{url('add-student')}}" method="POST">

                    @csrf
                    <div>
                        <x-label for="name" :value="__('Student Name')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                    <div>
                        <x-label for="email" :value="__('Student Email')" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />
                    <x-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
                    </div>
                    <x-button class="ml-3 mt-2">
                        {{ __('Save Student') }}
                    </x-button>


                </form>
            </div>
        </div>
    </div>
     
</x-app-layout>