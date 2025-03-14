<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.min.js"></script>
</head>
<body>
    <style>
           @font-face {
            font-family: 'THSarabunNewBold';
            src: url('/fonts/THSarabunNewBold.ttf') format('truetype');
            font-weight: normal;
        }

        body {
            margin: 0;
            padding: 0;
            overflow: auto;
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

        @media (max-width: 1300px) {
            .fullscreen-image {
                width: 100vw;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: auto;
                overflow-x: scroll;
            }

            .fullscreen-image img {
                min-width: 100%;
                min-height: 100%;
                object-fit: contain;
            }

        }

        .login-button {
            margin-top: 350px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            width: 280px;
            height: 50px;
            border-radius: 20px;
            border: none;
            background: linear-gradient(145deg, #ffffff, #e3e3e3);
            color: black;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2),
                -4px -4px 10px rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
            font-family: 'THSarabunNewBold';
        }

        .login-button:hover {
            background: #e8e9eb;
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.2),
                inset -2px -2px 5px rgba(255, 255, 255, 0.5);
            transform: translate(-50%, -50%) scale(0.98);
        }

    </style>

    <div class="fullscreen-image">
        <img id="background-image" src="{{ asset('images/festival_slides/410a5b6611a80470.png') }}" alt="รูปภาพอินโทร">
    </div>

    <button class="login-button">
        <strong style="font-size: 30px">เข้าสู่เว็บไซต์</strong>
    </button>

    <script>
        window.onload = function() {
            var img = document.querySelector('#background-image');
            var colorThief = new ColorThief();
            if (img.complete) {
                var color = colorThief.getColor(img);
                document.body.style.backgroundColor = 'rgb(' + color.join(',') + ')';
            } else {
                img.onload = function() {
                    var color = colorThief.getColor(img);
                    document.body.style.backgroundColor = 'rgb(' + color.join(',') + ')';
                };
            }
        };

    </script>

</body>
</html>
