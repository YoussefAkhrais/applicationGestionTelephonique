<x-dashboard>
{{-- Table --}}
<h1 class="text-center  text-blue-500 text-lg">Retrieve User</h1>
<div class="grid mt-5 grid-cols w-100">
    <div class="w-full overflow-x-auto">
        <table id="userTable" class="min-w-full  table-auto">
            <thead>
                <tr class="bg-blue-500 border-b font-bold">
                    <th class="px-6 py-3 text-left text-sm font-medium text-white">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-white">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-white">Phone Number</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-white">Service</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-white">Control</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $employee->id }}</td>
                        <td  id="name" class="px-6 py-4 text-sm text-gray-900">{{ $employee->nameUser }}</td>
                        <td id="phone" class="px-6 py-4 text-sm text-gray-900">{{ $employee->phoneUser }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $employee->serviceUser }}</td>
                        <td class="px-6 py-4 text-sm flex items-center gap-5 text-gray-900">
                           
                            <div class="flex bg-red  gap-8">
                                    {{-- Retrieve button --}}
                                    <form method="GET"  action="{{route('retrievEmp',$employee)}}">
                                     
                                      
                                    <button type="submit" class="update">
                                    <i class="fa-solid fa-rotate"></i>
                                    </button>
                                    </form>
                                   
                            </div>
                           
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</x-dashboard>