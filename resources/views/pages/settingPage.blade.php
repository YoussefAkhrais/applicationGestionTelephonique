<link rel="stylesheet" href="{{asset('css/athetificationStyle.css')}}">
<link rel="stylesheet" href="{{asset('css/settingStyle.css')}}">
<x-dashboard>

<div class="grid grid-cols-1 gap-3">
  
  

  @if(session('success'))
  <div id="alertUpdate" class="bg-blue-800 rounded-lg flex items-center align-center gap-3 w-50 p-2">
  <i class="fa-solid text-white font-xl  fa-check"></i>
   <p class="text-white">
    {{session('success')}}
    </p>
    </div>
@endif



<div class="w-full  rounded-2xl overflow-hidden shadow-lg bg-white border border-gray-200">
 
  <div class="p-4 flex items-center align-center justify-between">
    <h2 class="text-xl  font-bold  "><i class="fa-solid addIcon fa-plus"></i></h2>
  
    <div class="">
      <a href="{{route('addUser')}}" class=" bg-blue-500  text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
            create new user
      </a>
    </div>
  </div>
</div>
<div class="w-full rounded-2xl overflow-hidden shadow-lg bg-white border border-gray-200">
 
  <div class="p-4 flex items-center align-center justify-between">
    <h2 class="text-xl  font-bold  "><i class="fa-solid addIcon fa-trash-can-arrow-up"></i></h2>
  
    <div >
      <a href="{{route('retrieve')}}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
      Retrieve user
      </a>
    </div>
  </div>
</div>
<div class="w-full rounded-2xl overflow-hidden shadow-lg bg-white border border-gray-200">
 
  <div class="p-4 flex items-center align-center justify-between">
    <h2 class="text-xl  font-bold  "><i class="fa-solid addIcon fa-pen"></i></h2>
  
    <div >
      <button id="UpdatePasswordButton"  class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
          update password user

      </button>
    </div>
  </div>
</div>
</div>

<!-- form for update password user -->
<div id="formUpdatePassword" class="bg-white hidden   w-25 formUpdatePassword  p-6 rounded-lg shadow-lg  max-w-md">
  <h1 class="text-center text-blue-500 text-lg">Update password user</h1>
        <form  method="POST" action="{{route('sendPassword')}}" class="space-y-4  ">
            @csrf
            <!-- Name Input -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">New Passowrd</label>
                <input 
                oncopy="return false"
                    type="password" 
                    id="nameuser" 
                    name="password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                   
                />
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <!-- Email Input -->
            <div>
                <label for="passowrd" class="block text-sm font-medium text-gray-700">Confirmat Password</label>
                <input 
                    type="password" 
                    id="passowrd" 
                    name="password_confirmation"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                    
                />
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div>
                <button id="buttonForm"
                    type="submit" 
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none"
                >
                <i class="fa-regular fa-floppy-disk"></i>
                </button>
            </div>
        </form>
    </div>

    <script src="{{asset('js/hiddenForm.js')}}"></script>
</x-dashboard>