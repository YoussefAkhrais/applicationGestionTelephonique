
<x-dashboard>
<form action="{{route('removeDB',$id)}}" method="POST">
    @csrf
    @method('DELETE')
<div id="confirmationBox" class="max-w-md w-50 mx-auto mt-10 p-4 bg-blue-600 rounded-lg h-50 shadow-lg">
    <div class="flex items-center space-x-4">
        <div class="flex-shrink-0">
            <i class="fa-solid text-white f-12 fa-circle-exclamation font-bold text-blue-800"></i>
        </div>
        <div class="flex-1">
            <p class="text-lg font-semibold text-white">Confirmation box {{$id}}</p>
            <p class="text-white">If you need to delete this user, click on OK</p>
        </div>
    </div>
    <div class="mt-4 flex justify-center gap-10">
        <a href="{{route('index')}}" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600">Back</a>
        <button type="submit"  class="bg-white text-black px-4 py-2 rounded-full hover:bg-blue-300">OK</button>
        
    </div>
</div>
</form>

</x-dashboard>