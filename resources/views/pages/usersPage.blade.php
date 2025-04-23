<link rel="stylesheet" href="{{asset('css/style.css')}}">
@vite('resources/css/app.css')
        <nav class="bg-blue-900 text-white p-4">
                <div class="container navbar mx-auto flex justify-between items-center">
                            <div class="flex items-center"><h1 class="text-xl ml-0 font-bold"> Application Gestion Telephonique</h1></div>
                            <!-- <img class="logo" src="{{asset('images/logo.webp')}}" alt=""> -->
                            <ul class="flex space-x-4">
                                <!-- <li className="darkMode"><a href="#" class="hover:underline"><i class="fa-solid fa-moon dark"></i><i class="fa-solid fa-circle-half-stroke"></i></a></li> -->
                                <li class="flex gap-5 items-center"><h1>User</h1> <i class="fa-solid admin fa-user-tie"></i> </li>
                <a href="{{route('logout')}}" class="block py-2 px-4 hover:bg-blue-700 rounded"><i class="fa-solid fa-right-from-bracket mr-3"></i>Log Out</a>

                                
                            </ul>
                </div>         
        </nav>

<div class="me-10 ml-10">
 
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
<div class="grid userTable mt-5 grid-cols w-100">
    <div class="w-full overflow-x-auto">
        <table id="userTable" class="min-w-full  table-auto">
            <thead>
                <tr class="bg-blue-500 border-b font-bold">
                    <th class="px-6 py-3 text-left text-sm font-medium text-white">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-white">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-white">Phone Number</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-white">Service</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $employee->id }}</td>
                        <td  id="name" class="px-6 py-4 text-sm text-gray-900">{{ $employee->nameUser }}</td>
                        <td id="phone" class="px-6 py-4 text-sm text-gray-900">{{ $employee->phoneUser }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $employee->serviceUser }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
        
</div>
<script src="{{asset('js/filtrageUser.js')}}">

</script>



