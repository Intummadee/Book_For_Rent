<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.0/classic/ckeditor.js"></script>


    <style>
        :root {
            --green: #2DB66E;
            --background: #171E31;
            --red: #904363;
            --darkblue: #12192C;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            /* font-family: "Inter", sans-serif; */
        }

        body {
            /* background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQk0ay4mR7OywI9urP8mD1nUBMIgTI90iryOf5SpvlvA4sgnhMMFVesqouc6l97r1C58uo&usqp=CAU'); */
            min-height: 10vh;
            font-family: 'Poppins', sans-serif;
            /* background: #ececec; */
        }

        /* ข้อความ Book Nook */
        .head {
            margin-left: 10px;
            font-size: 25px;
            font-weight: bold;
            color: white;
        }

        .container-fluid{
            /* top: -100px */
            transform: translateY(-10px);
            padding-top: 10px;
            padding-bottom: 10px;
        }

        /* text ด้านขวา ของ head */
        .title {
            font-size: 18px;
            color: white;

        }


        .nav-item:hover {
            text-decoration: var(--green) wavy underline;
        }

        #navbarDropdown{
            color: white;
            /* border: 2px solid #32a1ce; */

        }

    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
        <div class="container-fluid" style="background: #12192C">
            <div>
                <img src="/images/logo.png"
                    width="40px" height="35px" alt="">
                {{-- https://cdn3.iconfinder.com/data/icons/flat-office-icons-1/140/Artboard_1-1024.png --}}
            </div>
            <a class="navbar-brand" href="/"><span class="head">Book Nook</span></a>




            <div class="collapse navbar-collapse ms-m" id="navbarText">
                <ul class="navbar-nav ms-auto">

                    {{-- รูป Cart --}}
                    <li class="nav-item ">
                        <a class="nav-link d-flex justify-content-center align-items-center" href="{{ route('about') }}"><img style="padding-bottom: 1px; padding-right:3px"  width="33px" height="30px" src="/images/cart.png" ><span class="title" style="scroll-padding-left: 2px">Cart</span></a>
                        <a data-mdb-dropdown-init class="text-reset me-3 dropdown-toggle hidden-arrow" href="{{ route('about') }}" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                            <i class="fas fa-bell"></i><span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                    </li>



                    {{-- รูป Figma --}}
                    <li class="nav-item d-flex justify-content-center align-items-center mx-4">
                        <a target="_blank"
                            href="https://www.figma.com/file/YNgHl22lq0Ox5hIhp0oSKg/Book_For_Rent?type=design&node-id=0%3A1&mode=design&t=qwix9YKjAz0pxInb-1">
                            <img border="0" alt="Figma"
                                src="https://s3-alpha.figma.com/hub/file/1481185752/fa4cd070-6a79-4e1b-b079-8b9b76408595-cover.png"
                                width="20" height="25">
                        </a>
                    </li>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><span class="title">Login</span></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><span
                                            class="title">Register</span></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span class="title">{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                </ul>
            </div>
        </div>
    </nav>



    <div class="container py-2">
        @yield('content')
    </div>
</body>

</html>
