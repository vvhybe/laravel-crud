{{-- @section --}}
<li class="py-4 min-h-52 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition-all hover:scale-[1.02]">        
    <div class="px-5">
        <a href="#">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $name }}</h5>
        </a>
        <h6 class="text-lg font-semibold tracking-tight text-blue-700 dark:text-white">{{ $category }}</h6>
        <p class="text-slate-700 text-sm py-2">
            {{ $description }}
        </p>
        <div class="flex items-center justify-between">
            <span class="text-3xl font-bold text-gray-900 dark:text-white">{{ $price }}</span>
            <div class="flex gap-2">
                <form action="{{ "/delete/".$id }}" method="post">
                    {{-- runnig delete method --}}
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md px-3 py-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"><i class="fi fi-sr-trash"></i></button>
                </form>
                <a href="/edit/{{$id}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fi fi-sr-pencil"></i></a>
            </div>
        </div>
    </div>
</li>
{{-- @endsection --}}
