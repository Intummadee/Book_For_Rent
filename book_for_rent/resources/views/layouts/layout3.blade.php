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
            background: black;
        }


        /* <!--------------------------- Nav ----------------------------> */
        .container-fluid {
            padding-top: 12px;
            padding-bottom: 12px;
        }

        #navMom {
            /* top: -100px; */
            transform: translateY(-10px);
        }



        /* <!--------------------------- Text ----------------------------> */
        /* ข้อความ Book Nook */
        .head {
            margin-left: 10px;
            font-size: 25px;
            font-weight: bold;
            color: white;
        }

        /* text ด้านขวา ของ head */
        .title {
            font-size: 18px;
            color: white;

        }

        /* <!--------------------------- Text Hover ----------------------------> */
        .nav-item:hover {
            text-decoration: var(--green) wavy underline;
        }



        /* <!--------------------------- Menu , Nav-item ----------------------------> */
        #navbarDropdown {
            color: white;
            /* border: 2px solid #32a1ce; */
        }

        #threeline {
            color: var(--green);
            background: white;
        }

        #notiCart {
            position: relative;
            top: -10px;
            right: -4px;
        }


        /* <!--------------------------- SideBar ----------------------------> */
        .sidebar {
            margin-top: 78px;
            padding: 0;
            background-color: var(--green);
            position: fixed;
            width: 200px;
            height: 100%;
            top: -10px;
            z-index: 10000;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }



        /* <!--------------------------- Content ----------------------------> */
        div.content {
            /* margin-left: 200px;
            padding: 1px 16px;
            height: 1000px; */
        }



        /* <!--------------------------- Responsive ----------------------------> */
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }


        }
    </style>

</head>

<body>



    <nav class="navbar navbar-expand-lg" id="navMom">
        {{-- <!--------------------------- Container Wrapper ----------------------------> --}}
        <div class="container-fluid" style="background: #12192C; ">
            <div class="d-flex justify-content-center align-items-center">
                <img src="/images/logo.png" width="40px" height="35px" alt="">
                {{-- https://cdn3.iconfinder.com/data/icons/flat-office-icons-1/140/Artboard_1-1024.png --}}
                <a class="navbar-brand " href="/"><span class="head">Book Nook</span></a>
            </div>




            {{-- Button ตรงนี้คือ ถ้าย่อขนาดหน้าจอ มันจะทำปุ่ม dropdown ให้ อย่าลบ! --}}
            <button id="threeline" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse ms-m" id="navbarText">
                <ul class="navbar-nav ms-auto">

                    {{-- <!--------------------------- Cart ----------------------------> --}}
                    <li class="nav-item ">
                        <a class="nav-link d-lg-flex justify-content-center align-items-center"
                            href="{{ route('about') }}">
                            <img style="padding-bottom: 1px; padding-right:3px" width="33px" height="30px"
                                src="/images/cart.png">
                            <span class="title" style="scroll-padding-left: 2px">Cart</span>

                            <span class="badge rounded-pill badge-notification bg-danger" id="notiCart">1</span>
                        </a>
                    </li>



                    {{-- <!--------------------------- Figma ----------------------------> --}}
                    <li class="nav-item d-lg-flex justify-content-center align-items-center mx-4">
                        <a target="_blank"
                            href="https://www.figma.com/file/YNgHl22lq0Ox5hIhp0oSKg/Book_For_Rent?type=design&node-id=0%3A1&mode=design&t=qwix9YKjAz0pxInb-1">
                            <img border="0" alt="Figma"
                                src="https://s3-alpha.figma.com/hub/file/1481185752/fa4cd070-6a79-4e1b-b079-8b9b76408595-cover.png"
                                width="20" height="25">
                        </a>
                    </li>



                    {{-- test --}}
                    {{-- <li class="nav-item dropdown text-white d-lg-flex justify-content-center align-items-center flex-column" >
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown link
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item " href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> --}}


                    {{-- <!--------------------------- User Authen ----------------------------> --}}
                    <li class="nav-item d-lg-flex justify-content-center align-items-center flex-column">
                        @guest
                            @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><span class="title">Login</span></a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><span class="title">Register</span></a>
                            </li>
                        @endif


                        {{-- <!--------------------------- Log out ----------------------------> --}}
                    @else
                        <li class="nav-item dropdown d-lg-flex justify-content-center align-items-center flex-column">
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

                </li>
            </div>
        </div>


    </nav>




    {{-- <!--------------------------- Content ----------------------------> --}}
    <div class="container  py-2">
        @yield('content')
    </div>






</body>
</html>
