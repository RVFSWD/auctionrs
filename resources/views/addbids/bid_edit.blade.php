@include('partials.header', )
<header class="max-w-lg mx-auto">
    <a href="#">
        <h1 class="text-4xl font-bold text-white text-center">Edit {{$mybid->user_name}}</h1>
    </a>    
</header>
<main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
    
    <section class="mt-10">
        <form action="/mybid/{{$mybid->id}}" method="POST" class="flex flex-col">
            @method('PUT')
            @csrf

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="full_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">full Name</label>
                <input type="text" name="full_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{$bid->full_name}}>
                @error('full_name')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                @enderror
            </div>
            
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="user_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">User Name</label>
                <input type="text" name="user_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{$bid->user_name}}>
                @error('user_name')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="bid" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Bid</label>
                <input type="text" name="bid" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{$bid->bid}}>
                @error('bid')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                @enderror
            </div>

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                <input type="text" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{$bid->email}}>
                @error('bid')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                @enderror
            </div>

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Gender</label>
                <input type="text" name="gender" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{$bid->gender}}>
                @error('bid')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                @enderror
            </div>

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="age" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Age</label>
                <input type="text" name="age" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{$bid->age}}>
                @error('bid')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                @enderror
            </div>

            {{-- <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Gender</label>
                <select name="gender" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                    <option value="" {{$student->gender == "" ? 'selected' : ''}}></option>
                    <option value="Male" {{$student->gender == "Male" ? 'selected' : ''}}>Male</option>
                    <option value="Female" {{$student->gender == "Female" ? 'selected' : ''}}>Female</option>
                </select>
                @error('gender')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="age" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Age</label>
                <input type="number" name="age" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{$student->age}}>
                @error('age')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{$student->email}}>
                @error('email')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                @enderror
            </div> --}}
            
            <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Update</button>
             
        </form>
        <form action="/bid/{{$bid->id}}" method="POST">
            @method('biddelete')
            @csrf
            <button type="submit" class="w-full mt-2 bg-red-500 hover:bg-red-600 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Delete</button>
        </form>
            

    </section>
</main>
@include('partials.footer')

