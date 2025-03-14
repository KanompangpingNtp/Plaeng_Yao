<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}
</head>
<body>
    <style>
        /* style.css */
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: relative;
        }

        .fullscreen-image {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fullscreen-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* .login-button {
            margin-top: 325px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            width: 210px;
            height: 40px;
        } */
        .login-button {
            margin-top: 340px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            width: 280px;
            height: 50px;
            border-radius: 20px;
            border: none;
            background-color: white;
            color: black;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>

    <div class="fullscreen-image">
        <img src="{{ asset('images/festival_slides/410a5b6611a80470.png') }}" alt="">
    </div>

    <button class="login-button">
        <strong style="font-size: 23px">เข้าสู่เว็บไซต์</strong>
    </button>
</body>

</html>
