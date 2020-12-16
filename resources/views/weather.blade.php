<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(238, 237, 237, 0.33);
            color: rgb(105, 104, 104);
            font-family: sans-serif
        }

        .container {
            height: 80vh;
            background-color: #ffffff;
            border-color: #ffffff;
            align-items: center;
            border-radius: 1rem;
            vertical-align: middle
        }

        @media(max-width:767px) {
            .container {
                height: fit-content
            }
        }

        .weather {
            width: 77%
        }

        @media(max-width:767px) {
            .weather {
                width: 100%
            }
        }

        .card {
            padding: 1rem;
            margin: 1.5rem 4vw;
            border-radius: 1rem;
            background-color: rgba(238, 237, 237, 0.22);
            border-color: rgba(238, 237, 237, 0.22);
            box-shadow: 5px 6px 6px 2px #e9ecef;
            text-align: center
        }

        @media(max-width:768px) {
            .card {
                margin: 1.5rem
            }
        }

        .title {
            justify-content: center;
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        .title p {
            margin-bottom: 0.2rem;
            font-size: 1.2rem
        }

        .temp {
            font-size: 2.6rem;
            margin-bottom: 1rem
        }

        .header {
            color: #dddddd
        }

        .col-4 {
            padding: 0 0.2rem
        }

        .icon {
            align-self: flex-end;
            margin-right: -2.5rem;
            margin-top: -2rem;
            z-index: 999
        }

        .icon img {
            width: 5rem
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class=" col-md-6">
            <div class="card"><span class="icon"><img class="img-fluid"
                                                      src="https://img.icons8.com/emoji/96/000000/sun-emoji.png"/></span>
                <div class="title">
                    <p>{{ $cityName }}</p>
                </div>
                <div class="temp">{{ $celsius }}<sup>&deg;</sup></div>
                <div class="row">
                    <div class="col-4">
                        <div class="header">General</div>
                        <div class="value">{{ $weatherDesc }}</div>
                    </div>
                    <div class="col-4">
                        <div class="header">Air pollution</div>
                        <div class="value">47</div>
                    </div>
                    <div class="col-4">
                        <div class="header">Fire</div>
                        <div class="value">No</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</body>
</html>
