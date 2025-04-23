<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page Athentification</title>
    <link rel="stylesheet" href="{{asset('css/athetificationStyle.css')}}">
    @vite('resources/css/app.css')
</head>
<body>
<body >
    <div class="w-full bg-black logoSothema ">
        <img src="{{asset('images/logoSothgema.png')}}" alt="">
       </div>
    <div class="bg-white  formAthentificate   p-6 rounded-lg shadow-lg  max-w-md">
        <form action="{{route('loginUser')}}" method="POST" class="space-y-4  ">
            @csrf
            
            <!-- Name Input -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">UserName</label>
                <input 
                    type="text" 
                    id="nameAdmin" 
                    name="nameAdmin"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                />
                @error('nameUser')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <!-- Email Input -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                  
                />
                @error('passowrd')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div>
                <button 
                    type="submit" 
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none"
                >
                    Connexion
                </button>
                @if($errors->has('user'))
                    <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </form>
      
    </div>
    
</body>
</html>