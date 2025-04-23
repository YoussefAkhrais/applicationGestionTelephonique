<body>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@vite('resources/css/app.css')
        <nav class="bg-blue-900 text-white p-4">
                <div class="container navbar mx-auto flex justify-between items-center">
                            <div class="flex items-center"><h1 class="text-xl ml-0 font-bold"> Application Gestion Telephonique</h1></div>
                            <!-- <img class="logo" src="{{asset('images/logo.webp')}}" alt=""> -->
                            <ul class="flex space-x-4">
                                <!-- <li className="darkMode"><a href="#" class="hover:underline"><i class="fa-solid fa-moon dark"></i><i class="fa-solid fa-circle-half-stroke"></i></a></li> -->
                                <li class="flex gap-5 items-center"><h1>ADMIN: </h1>  <p>Hamza Oussayeh</p> <i class="fa-solid admin fa-user-tie"></i></li>
                                
                            </ul>
                </div>         
        </nav>
     
    <div class="flex h-screen">
        
        <aside class="w-64 bg-blue-900 aside_menu  text-white p-5">
            <nav class="mt-5">
            @auth('admin')
                <a href="{{ route('addUser')}} " class="block py-2 px-4 hover:bg-blue-700 rounded"><i class="fa-solid fa-plus mr-3"></i>Add Number Phone</a>
                <a href="{{ route('getAllUser')}} "  class="block py-2 px-4 hover:bg-blue-700 rounded"><i class="fa-solid fa-eye mr-3"></i>Show All Number</a>       
                <a href="{{route('setting')}}" class="block py-2 px-4 hover:bg-blue-700 rounded"><i class="fa-solid fa-bars mr-3"></i>Settings</a>
           
                <a href="{{route('logout')}}" class="block py-2 px-4 hover:bg-blue-700 rounded"><i class="fa-solid fa-right-from-bracket mr-3"></i>Log Out</a>
            @endauth
            </nav>
        </aside>
        
        <main class="flex-1 p-6">
    
                {{$slot}}
    
        </main>
        
           
      
    </div>
    </body>