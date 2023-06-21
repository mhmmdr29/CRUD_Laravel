<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
          
                <form action="{{url('update-student/'.$student->id)}}" method="POST">

                    @csrf
                    @method('PUT')
                    <div>
                        <x-label for="name" :value="__('Student Name')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$student->name" required autofocus />
                    </div>
                    <div>
                        <x-label for="email" :value="__('Student Email')" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$student->email" required autofocus />
                    </div>

                    <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />
                    <x-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
                    </div>
                    <x-button class="ml-3 mt-2">
                        {{ __('Update Student') }}
                    </x-button>


                </form>
            </div>
        </div>
    </div>
     
</x-app-layout>