@extends('layouts.layout3')

@section('title', 'Home')


<head>
    <style>
        :root {
            --green: #2DB66E;
            --background: #2e3f61;
            --red: #EA6DA1;
            --darkblue: #12192C;
            --header18: 18px;
            /* font-family: 'Open Sans', sans-serif; */
            /* font-family: "Inter", sans-serif; */
        }

        /* padding-left: 1rem;
        padding-right: 1rem; */

        #head {
            padding-left: 1rem;
            padding-right: 1rem;
            margin-top: 2rem;
            margin-bottom: 50rem;
            /* ใส่ไว้ก่อน ค่อยลบ */
        }

        .favoriteBook>blockquote {
            margin-left: 2rem;

        }

        blockquote {
            display: block;
            background: none;
            padding: 10px 20px;
            /* margin: 0 0 20px; */
            position: relative;
            font-family: "Inter", sans-serif;
            font-size: 24px;
            line-height: 1.2;
            color: var(--green);
            text-align: justify;
            border-left: 10px solid var(--green);

        }


        /* <!--------------------------- shelf ----------------------------> */
        .bookshelf {
            width: 900px;
            margin: 3rem auto;
            text-align: center;
            position: relative;
            /* background: red; */
        }

        .book-grid {
            z-index: 2;
            position: relative;
            transform: translateY(-13px);
        }

        .book-grid ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        .book-grid ul li {
            justify-self: center;
        }

        .book-grid ul img {
            display: block;
            box-shadow: 0px -5px 20px 2px rgba(0, 0, 0, 0.3);
            width: 200px;
            height: 300px;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .shelf-shadows {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            /* height: 1rem; */
            height: 10px;
            border-radius: 2px;
            z-index: 1;
            box-shadow: 0px -5px 3px 0px rgba(170, 170, 170, 0.2), 0px 15px 20px 0px rgba(170, 170, 170, 0.7), 0px 5px 5px 0px rgba(119, 119, 119, 0.3);
        }

        .shelf {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 13px;
            background-color: #f9f9f9;
            border-radius: 2px;
            z-index: 3;
        }

        li > img:hover{
            opacity: 0.60;
            cursor: pointer;
        }




        /* <!--------------------------- responsive ----------------------------> */
        @media screen and (max-width: 400px) {
            #head {
                padding-left: 0rem;
                padding-right: 0rem;
                margin-top: 2rem;
                margin-bottom: 50rem;
                /* ใส่ไว้ก่อน ค่อยลบ */
            }

        }
    </style>
</head>


@section('content')

    <div id="head">
        <div class="favoriteBook">
            <blockquote>
                Best Favorite Books
            </blockquote>
        </div>


        {{-- <div class="shelf">
            <div class="bookend_left"></div>
            <div class="bookend_right"></div>
            <div class="reflection"></div>
        </div> --}}


        <div class="bookshelf">
            <div class="book-grid">
                <ul>
                    <li> <img src="https://images-na.ssl-images-amazon.com/images/I/51uLvJlKpNL._SX321_BO1,204,203,200_.jpg" /></li>
                    <li> <img src="https://i.harperapps.com/covers/9780062698162/x510.jpg" /></li>
                    <li> <img src="https://i.pinimg.com/564x/f7/c8/12/f7c812c9b0296cd9f119e33a06d9a256.jpg" /></li>
                </ul>
            </div>
            <div class="shelf-shadows"></div>
            <div class="shelf"></div>
        </div>

        <div style="margin-top: 5rem">
            <h1>Hello1</h1>
        </div>




    </div>




@endsection
