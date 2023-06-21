<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <x-success-status class="mb-4" :status="session('message')" />
           <table class="table table-bordered">
                <tr>
                    <th>SL.No</th>
                    <th>Student Name</th>
                    <th>Student Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
    
                @foreach ($students as $student)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                            <a href="{{url('/edit-student/'.$student->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            
                        <form action="{{url('delete-student/'.$student->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-button class="btn btn-danger">Delete</x-button>
                        </form>
                        </td>

                    </tr>
                @endforeach
              
            </table>
            </div>
        </div>
    </div>
     
</x-app-layout>