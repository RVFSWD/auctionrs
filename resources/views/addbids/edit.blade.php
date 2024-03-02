{{-- @include('partials.header', ) --}}


{{-- <header class="max-w-lg mx-auto">
    <a href="#">
        <h1 class="text-4xl font-bold text-black text-center">Edit {{$addbid->user_name}}</h1>
    </a>    
</header>
<main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
    
    <section class="mt-10">
        <form action="/addbid/{{$addbid->id}}" method="POST" class="flex flex-col">
            @method('PUT')
            @csrf
            
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="user_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">User Name</label>
                <input type="text" name="user_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{$addbid->user_name}}>
                @error('user_name')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="bid" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Bid</label>
                <input type="text" name="bid" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" autocomplete="off" value={{$addbid->bid}}>
                @error('bid')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                @enderror
            </div> --}}


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

            
            {{-- <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Update</button>
             
        </form>
        <form action="/addbid/{{$addbid->id}}" method="POST">
            @method('delete')
            @csrf
            <button type="submit" class="w-full mt-2 bg-red-500 hover:bg-red-600 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Delete</button>
        </form>
            

    </section>
</main>  --}}


{{-- @include('partials.footer') --}}

{{-- ###################################################################  --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>AuctionRS | Welcome</title>
    <link rel="icon" type="image/x-icon" href="./images_logo/favicon_01.png">
</head>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}

h1 {
    font-weight: 800;
}

p {
    font-weight: 500;
}

h4 {
    color: black;
}

h5 {
    color: black;
}

body {
    background-color: #fff;
    color: black;
    font-family: sans-serif;
}


.form-con {
    margin: 100px auto;
    width: 30%;
    padding: 35px 40px;
}

.form-con label {
    margin: 10px 0px;
}

</style>

<body>

<div class="form-con container shadow-lg rounded">
    <div class="form-row row">
        <div class="form-col col-md-12">
            <div class="form-header">
                <h3>Edit {{$addbid->user_name}}</h3>

                <form action="/addbid/{{$addbid->id}}" method="POST" class="flex flex-col">
                    @method('PUT')
                    @csrf

                    <div class="col-md-12">
                      <label for="validationCustom01" class="form-label">Email</label>
                      <input type="text" name="user_name" class="form-control" id="validationCustom01" required value={{$addbid->user_name}}>
                      <div class="invalid-feedback">
                        Please provide User Name.
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label for="validationCustom02" class="form-label">Bid</label>
                      <input type="number" name="bid" class="form-control" id="validationCustom02" required value={{$addbid->bid}}>
                      <div class="invalid-feedback">
                        Please provide a valid amount.
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-dark my-3 mx-0" type="submit">Update</button>
                    </div>
                  </form>
                  <form action="/addbid/{{$addbid->id}}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    
(() => {
  'use strict'

  
  const forms = document.querySelectorAll('.needs-validation')

 
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>      

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>    