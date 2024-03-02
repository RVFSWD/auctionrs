@include('partials.header') 
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center"></h1>
        </a>    
    </header>
    <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Welcome to AuctionRS</h3>
            <p class="text-gray-600 pt-2">Already have an account? <a href="/login" class="text-red-500 font-bold">Login</a></p>
            
        </section>
        <section class="mt-10">
            <form action="/store" method="POST" class="flex flex-col">
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Name</label>
                    <input type="text" name="name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{old('name')}}>
                    @error('name')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{old('email')}}>
                    @error('email')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                    <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                    @error('password')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign Up</button> 
            </form>
        </section>
    </main>
@include('partials.footer')




{{-- <!DOCTYPE html>
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
<body>

<div class="form2-con container shadow-lg">
    <div class="form-row row">
        <div class="form-col col-md-12">
            <div class="form-header">
                <h3>Welcome to AuctionRS</h3>
                <p>Already have an account? <a href="login">Login</a></p>

                <form action="/store" method="POST" class="row g-3 needs-validation" novalidate>
                  @csrf
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="validationCustom01" required value={{old('name')}}>
                        <div class="invalid-feedback">
                          Please provide your name.
                        </div>
                      </div>
                    <div class="col-md-12">
                      <label for="validationCustom01" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="validationCustom01" required value={{old('email')}}>
                      <div class="invalid-feedback">
                        Please provide your Email.
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label for="validationCustom02" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="validationCustom02" value="" required>
                      <div class="invalid-feedback">
                        Please provide a valid password.
                      </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="validationCustom02" value="" required>
                        <div class="invalid-feedback">
                          Please confirm your password.
                        </div>
                      </div>
                    <div class="col-md-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-danger" type="submit">Signup</button>
                    </div>
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
</html>  --}}






