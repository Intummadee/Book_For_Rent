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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.0/classic/ckeditor.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

        /* Font for Books Left */
        @import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* font-family: "Inter", sans-serif; */
        }

        $bookAngle: 60deg;
        $speed: 5s;
        $borderColor: #555;

        $images:
            url('https://picsum.photos/420/300?random=1'),
            url('https://picsum.photos/420/300?random=2'),
            url('https://picsum.photos/420/300?random=3'),
            url('https://picsum.photos/420/300?random=4'),
            url('https://picsum.photos/420/300?random=5'),
            url('https://picsum.photos/420/300?random=1');

            // Preload to images
            .imgLoader {
            position: fixed;
            animation: preLoad 1s steps(1);
            width: 1px;
            height: 1px;

            @keyframes preLoad {
                0% { background-image: url('https://picsum.photos/420/300?random=1'); }
                10% { background-image: url('https://picsum.photos/420/300?random=2'); }
                20% { background-image: url('https://picsum.photos/420/300?random=3'); }
                30% { background-image: url('https://picsum.photos/420/300?random=4'); }
                40% { background-image: url('https://picsum.photos/420/300?random=5'); }
                100% { display: none; }
            }
            }



        body {
            /* background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQk0ay4mR7OywI9urP8mD1nUBMIgTI90iryOf5SpvlvA4sgnhMMFVesqouc6l97r1C58uo&usqp=CAU');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; */
            font-family: 'Poppins', sans-serif;
            background: #ececec;
        }

        #box {
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            border-radius: 10px;
            /* padding: 30px 40px; */
        }

        #title {
            display: flex;
            justify-content: center;
            font-size: 2rem;
            font-family: "Inter", sans-serif;
            font-weight: bold;
            font-optical-sizing: auto;
        }

        #text-inter {
            color: black;
            font-family: "Inter", sans-serif;
        }


        /*------------ Login container ------------*/
        .box-area {
            width: 930px;
        }

        /*------------ Right box ------------*/
        .right-box {
            padding: 40px 30px 40px 40px;
        }

        /*------------ Custom Placeholder ------------*/
        ::placeholder {
            font-size: 16px;
        }

        .rounded-4 {
            border-radius: 20px;
        }

        .rounded-5 {
            border-radius: 30px;
        }

        /*------------ For small screens------------*/
        /* ความกว้าง ไม่เกิน 768 พิกเซล คือความกว้างน้อยกว่า 768 px  */
        @media only screen and (max-width: 768px) {
            .box-area {
                margin: 0 10px;
            }

            .left-box {
                height: 100px;
                overflow: hidden;
            }

            .right-box {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        {{-- d-flex ถ้าตั้งไว้ที่ container ที่เป็นตัวแม่ ตัวลูกหรือพวก div ข้างใน container ก็จะได้รับ d-flex ไปด้วย ประหนึ่งตั้งไว้ที่แม่ เพื่อทำให้กล่องมัน flex ปล. defualt ของ flex direction คือ row --}}
        <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!--------------------------- Left Box ----------------------------->


            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">


                {{-- <div class="featured-image mb-3">
                    <img src="images/1.png" class="img-fluid" style="width: 250px;">
                </div> --}}

                <div class="book">
                    <div class="gap"></div>
                    <div class="pages">
                      <div class="page"></div>
                      <div class="page"></div>
                      <div class="page"></div>
                      <div class="page"></div>
                      <div class="page"></div>
                      <div class="page"></div>
                    </div>
                    <div class="flips">
                      <div class="flip flip1">
                        <div class="flip flip2">
                          <div class="flip flip3">
                            <div class="flip flip4">
                              <div class="flip flip5">
                                <div class="flip flip6">
                                  <div class="flip flip7"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>





                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
                {{-- text-wrap มันเหมือนการห่อ ถ้าเกินว่า ตัวอักษรมันเกินขนาดกล่องที่มันอยู่ ถ้าไม่ตั้ง text-wrap ไว้ มันจะเกินขนาดออกไป แต่ถ้า wrap มันจะปัดตกมาเปนบรรทัดที่สอง เพื่อให้ตัวอักษรมันไม่หลุดออกนอกกล่องที่ text มันอยู่ --}}
                <small class="text-white text-wrap text-center"
                    style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on
                    this platform.</small>
            </div>
            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello,Again</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Email address">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember
                                    Me</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Forgot Password?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px"
                                class="me-2"><small>Sign In with Google</small></button>
                    </div>
                    <div class="row">
                        <small>Don't have account? <a href="#">Sign Up</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
