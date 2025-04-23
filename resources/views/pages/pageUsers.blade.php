<div class="grid gap-3 grid-cols-2">
    {{-- Input for phone filter --}}
    <div class="mb-4">
        <input
        oninput="filtreDataWithPhone()"
        
            type="text"
            id="phone"
            placeholder="Filter with phone number"
            class="mt-2 p-3 w-75 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
    </div>

    {{-- Input for name filter --}}
    <div class="mb-4">
        <input
        oninput="filtreDataWithName()"
            type="text"
            id="name"
            placeholder="Filter with name"
            class="mt-2 p-3 w-full border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
    </div>

    {{-- Select for phone filter --}}
    <div class="w-75">
        <label for="phone_filter" class="block text-sm font-medium text-gray-700">Filter with phone number</label>
        <select onchange="filterWithSelectPhone()" id="phone_filter" name="phone_filter" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option  value="">select</option> 
        @foreach($employees as $employee)
          <option  value="{{$employee->phoneUser}}">{{$employee->phoneUser}}</option>
          @endforeach
        
        
        </select>
    </div>
    {{-- Select for name filter --}}
    <div class="w-75">
        <label for="name_filter" class="block text-sm font-medium text-gray-700">Filter with name</label>
        <select  onchange="filterWithSelectName()" id="name_filter" name="name_filter" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option  value="">select</option>
        @foreach($employees as $employee)
        
            <option  value="{{$employee->nameUser}}">{{$employee->nameUser}}</option>
        @endforeach
        </select>
    </div>
</div>
{{-- Table --}}
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
                                    {{-- Update button --}}
                                    <form   method="GET" action="{{route('edit',$employee)}}">
                                        @csrf
                                      
                                    <button  class="update">
                                        <i class="fa-solid fa-pen font-bold"></i>
                                    </button>
                                    </form>
                                    {{-- Delete button --}}
                                
                                    <form   method="GET" onsubmit="showMessageBox()" action="{{route('deletePage', $employee->id)}}">
                                        @csrf
                                       
                                        <button type="submit" class="delete">
                                           <a href=""> <i class="fa-solid fa-trash"></i></a>
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
<script src="{{asset('js/filtrageUser.js')}}">

</script>