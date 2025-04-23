<x-dashboard>
    
<div class="w-100 formAddUSer mx-auto bg-white p-6 rounded-lg shadow-md">
   
           <div id='messageBox'>
            
              @if($errors->any())
               <x-message-error :errors="$errors->any()" ></x-message-error>
               @endif
           </div>      
      
    <h2 class="text-2xl text-center text-blue-400 font-bold mb-4">Add User</h2>
    <form method="POST" action="{{route('insertUserToDb')}}" class="space-y-4">
        @csrf
        <div>
            <label class="block text-gray-700 font-semibold">Name</label>
            <input 
            name="nameUser"
                type="text" 
                placeholder="Enter your name" 
                class="w-full mt-1 p-2 border rounded-md"
            />
            @error('nameUser')
                    <p class="text-red-800 font-bold">name user is required !</p>
            @enderror
            
        </div>
        <div>
            <label class="block text-gray-700 font-semibold">Email</label>
            <input 
                name="emailUser"
                type="text" 
                placeholder="Enter your Email" 
                class="w-full mt-1 p-2 border rounded-md"
            />
            @error('nameUser')
                    <p class="text-red-800 font-bold">name user is required !</p>
            @enderror
        </div>

        <div>
            <label class="block text-gray-700 font-semibold">Number Phone</label>
            <div class="flex items-center">
                <input
                    name="phoneUser"
                    id="InputPhone"
                    type="number" 
                    placeholder="Enter your phone" 
                    class="w-full mt-1 p-2 border rounded-md"
                    maxlength="10"
                />
              <div class="iconNbrPhone fs-32 -ml-10 "></div>
            </div>
        </div>

        <div class="text-bold text-red">
            <span class="inline-flex items-center spanNbrChiffre rounded-md bg-gray-50 px-3 py-1 text-xs font-medium text-blue-600 ring-1 ring-red-500/10 ring-inset">
                {{ $nbrChiffre ?? 0 }}
            </span> to 10 chiffre (max 10 chiffre)
        </div>
        @error('phoneUser')
                    <p class="text-red-800 font-bold">phone user is required !</p>
            @enderror
        <div>
            <label class="block text-gray-700 font-semibold">Service User</label>
            <textarea 
            name="serviceUser"
                placeholder="Write your service here..." 
                class="w-full mt-1 p-2 border rounded-md"
                rows="4"
            ></textarea>
            @error('serviceUser')
                    <p class="text-red-800 font-bold">service user is required !</p>
            @enderror
        </div>

        <button 
            type="submit" 
            class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700 transition"
        >
            Add 
        </button>
    </form>
</div>

<script src="{{asset('js/add.js')}}">

</script>      
</x-dashboard>