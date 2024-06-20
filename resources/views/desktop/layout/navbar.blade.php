<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .header{
            border-bottom: 2px solid rgb(197, 197, 197);
        }
        .categoryBtn{
            color: #000;
            background: #fff;
            animation: 0.5s;
        }
        .categoryBtn:hover{
            background: #e2e2e2;
        }
        .cartBtn{
            color: #000;
            background: #fff;
            animation: 0.5s
        }
        .cartBtn:hover{
            background: #e2e2e2;
        }
        .headerBtn a{
            font-size: 14px;
            padding: 12px;
            margin: 0 5px;
            /* max-width: 100px; */
            width: 110px;
        }
        .btn-navbar {
            animation: 0.5s;
        }

        .btn-navbar:hover {
            background-color: #c6c6c6 !important;
        }
    </style>
    <title></title>
</head>
<body>
    @if (!Auth::check())
        <div class="top-0 header" style="width: 100%">
            <div class="container list-group d-flex flex-row mx-auto justify-content-between" style="padding:25px">
                <h3>Logo</h3>
                <button type="button" class="btn categoryBtn">Category</button>
                <div class="input-group search-bar" style="max-width: 700px">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                </div>
                <button type="button" class="btn cartBtn"><i class="bi bi-cart"></i></button>
                <div class="headerBtn d-flex flex-row justify content between">
                    <a href="{{ route('login.index') }}" class="btn btn-success">Login</a>
                    <a href="{{ route('register.index') }}" class="btn btn-light">Register</a>
                </div>
            </div>
        </div>
    @else 
        <div class="top-0 header" style="width: 100%">
            <div class="container list-group d-flex flex-row mx-auto justify-content-between" style="padding:25px">
                <h3>Logo</h3>
                <button type="button" class="btn categoryBtn btn-navbar">Category</button>
                <div class="input-group search-bar" style="max-width: 700px">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                </div>
                <button type="button" class="btn cartBtn"><i class="bi bi-cart"></i></button>
                <div class="headerBtn d-flex flex-row justify content between">
                    <a href="{{ route('login.index') }}" class="btn btn-navbar"><i class="bi bi-shop"></i>  Shop</a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Action
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                      </div>
                </div>
            </div>
        </div>
    @endif
</body>
</html>