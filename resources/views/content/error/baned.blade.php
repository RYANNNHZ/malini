<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>baned | page</title>
    <base href="{{ url('/') }}/">
    <link rel="shortcut icon" href="/images/icons/roti.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('css') . '/bootstrap.css' }}">
    <link rel="stylesheet" href="{{ url('icon') . '/font/bootstrap-icons.css' }}">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="container d-flex justify-content-center align-items-center my-5">
            <div class="w-25 card text-white bg-danger">
                <img class="" src="https://media0.giphy.com/media/l2JebrcLzSVLwCYEM/200w.gif?cid=6c09b952smx1d2pabejsgkfb8t3pu1q14rfdkqmvfhufk8wm&ep=v1_gifs_search&rid=200w.gif&ct=g" alt="">
                <div class="card-body">
                    <h1 class="card-title">{{ Auth::user()->username }}</h1>
                    <p class="card-text">kamu telah kena ban</p>
                </div>
            </div>

        </div>
    </div>
    <script src="{{ url('js') . '/popper.min.js' }}"></script>
    <script src="{{ url('js') . '/bootstrap.js' }}"></script>
</body>
</html>
