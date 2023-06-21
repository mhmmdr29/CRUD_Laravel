<x-student-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table style="width:100%">
                        <tr>
                            <td style="color:blue; font-size:25px;">Name</td>
                            <td style="color:blue; font-size:25px;">Email</td>
                            <td style="color:blue; font-size:25px;">Status</td>
                        </tr>
                        <tr>
                            <td >{{ Auth::guard('student')->user()->name  }}</td>
                            <td>{{ Auth::guard('student')->user()->email  }}</td>
                            <td>logged in!</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-student-layout>




