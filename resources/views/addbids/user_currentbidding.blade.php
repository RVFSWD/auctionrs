<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <title>AuctionRS | Welcome</title>
    <link rel="icon" type="image/x-icon" href="./images_logo/favicon_01.png">

    <style>

@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css");
@import url('https://fonts.googleapis.com/css2?family=Antonio&family=Bilbo+Swash+Caps&family=Days+One&family=Fjalla+One&family=Josefin+Sans&family=Poppins&family=Tangerine:wght@700&display=swap');

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

h3 {
    color: black;
}

h4 {
    color: black;
}

h5 {
    color: black;
}

body {
    background-color: #f5f5f5;
    color: black;
    font-family: sans-serif;
}

/* navbar #################### */

.navbar-nav a {
    margin-right: 30px;
    color: black;
    font-size: 17px;
}


.nav-items {
    margin: 4px 5px;
}

.join-btn {
    padding: 2px 0px;
}

.join-btn ul a {
    color: #212529;
    margin: 0px 10px;
}

.join-btn ul a:hover {
    color: #212529;
}

/* table ############################## */



.header-col h4 {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 25px;
    color: #fff;
    margin: 5px auto 25px;
}

.usertab-con {
    /* display: flex;
    align-items: center;
    justify-content: center; */
    /* text-align: center; */
    /* background-color: #f5f5f5;
    margin: 20px 22px; */
    /* width: 100%; */
}

.usertab-col {
    background-color: #fff;
    padding: 100px 0 200px;
}

.usersec-col {
    background-color: #212529;
    padding: 100px 0 200px;   
}

.usertab-con a {
    text-decoration: none;
}

.usertab-col h3 {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 22px;
    margin: 5px 90px 30px;
}

.usertab-col h4 {
    display: flex;
    align-items: center;
    
    font-size: 20px; 
    margin: 50px 90px 0px;
}

.usersec-con .table {
    display: flex;
    align-items: center;
    justify-content: center;
}

.usersec-col h3 {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    color: #fff;
    margin: 10px auto;
    width: 80%;
}

.table {
    margin: 20px auto 100px;
    width: 70%;
}

.logout-btn {
  text-decoration: none;
  border: none;
  background-color: #fff;
}


    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="images_logo/auction_logo3_v2.png" alt="" width="190" height="40" class="d-inline-block align-text-top"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">AuctionRS</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-items">
                        <a href="properties" class="nav-link">Properties</a>
                    </li>
                    <li class="nav-items">
                        <a href="company" class="nav-link">Company</a>
                    </li>
                    <li class="nav-items">
                        <a href="agents" class="nav-link">Agents</a>
                    </li>
                    <li class="nav-items">
                        <a href="contactus" class="nav-link">Contact Us</a>
                    </li>

                   
                </ul>
                   

                  <button type="button" class="join-btn btn btn-danger">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-0">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Join  &nbsp&nbsp&nbsp&nbsp<i class="fa-regular fa-user"></i></a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="login">Login</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="register">SignUp</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="user_currentbidding">Account</a></li>
                      </ul>
                    </li>
                  </ul>
                </button>
                </ul>
            </div>
          </div>
        </div>
      </nav>

{{-- user dashboard table-dark  colspan="2"--}}

<div class="usertab-con container-fluid">
    <div class="usertab-row row">
        <div class="usertab-col col-md-3">
            <h3>Welcome</h3>
            <h3>
                <script>

                </script>
            </h3>
            <h3>
                <script>

                </script>
            </h3>
            <a href=""><h4><svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 -960 960 960" width="28"><path d="m136-240-56-56 296-298 160 160 208-206H640v-80h240v240h-80v-104L536-320 376-480 136-240Z"/>
            </svg>&nbsp&nbsp Current Bids</h4></a>

            {{-- <a href=""><h4><svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 -960 960 960" width="28"><path d="M480-240Zm-320 80v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q37 0 73 4.5t72 14.5l-67 68q-20-3-39-5t-39-2q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32h240v80H160Zm400 40v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-340L683-120H560Zm300-263-37-37 37 37ZM620-180h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19ZM480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Z"/>
            </svg>&nbsp&nbsp Account</h4></a> --}}

            {{-- <a href=""><h4><svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 -960 960 960" width="28"><path d="M480-240Zm-320 80v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q37 0 73 4.5t72 14.5l-67 68q-20-3-39-5t-39-2q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32h240v80H160Zm400 40v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T903-340L683-120H560Zm300-263-37-37 37 37ZM620-180h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19ZM480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Z"/>
            </svg>&nbsp&nbsp Account</h4></a> --}}

              <form action="/logout" method="POST">
                @csrf
                <button class="logout-btn block py-2 pr-4 pl-3">
                <h4><svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 -960 960 960" width="28"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>&nbsp&nbsp Logout</h4>
                </button>
              </form>
        </div>

        <div class="usersec-col col-md-9">

          {{-- addbid ######################################################################  --}}

            <div class="header-con container">
                <div class="header-row row">
                    <div class="header-col col-md-12">
                        <h4>Current Bids</h4>
                    </div>
                </div>
            </div>

            <h3>Property 01: 3817 South Garden, Palisades Ayala Alabang, PH</h3>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="py-4 px-5" scope="col">User Name</th>
                    <th class="py-4 px-5" scope="col">Bid</th>
                  </tr>
                </thead>
                <tbody>@foreach ($addbids as $addbid)
                  <tr>
                    <td class="py-4 px-5">{{ $addbid->user_name }}</td>
                    <td class="py-4 px-5">{{ $addbid->bid }}</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
            <div class="mx-auto max-w-lg pt-6 p-4">
              {{$addbids->links()}}
            </div> 

 

<script src="script.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> 











{{-- ######################################################################## --}}

{{-- @include('partials.header')
// 
<x-nav :data="$array"/>
 

<header class="max-w-lg mx-auto mt-5">
    <a href="#">
        <h1 class="text-4xl font-bold text-white text-center">Current Bids</h1>
    </a>    
</header>
<section class="mt-10">
    <div class="overflow-x-auto relative">
        <table class="w-96 mx-auto text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        User Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Bid
                    </th>
                    
                </tr>
            </thead>

            <tbody>@foreach ($bids as $bid)
                <tr class="bg-gray-800 border-b text-white">
                    <td class="py-4 px-6">
                        {{ $bid->user_name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $bid->bid }}
                    </td>
                  
                    <td class="py-4 px-6">
                        <a href="/bid/{{$bid->id}}" class="bg-red-500 text-white px-4 py-1 rounded">view</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mx-auto max-w-lg pt-6 p-4">
            {{$bids->links()}}
        </div>
        
    </div>
</section>
@include('partials.footer')  --}}