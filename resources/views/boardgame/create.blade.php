<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('boardgame.create')}}">Inserisci un gioco</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center text-black display-4 text-shadow">
                    Inserisci i dati dei giochi
                </h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                <form action="{{route('boardgame.library')}}" method="POST" class="rounded shadow p-5 bg-secondary-subtle text-center">
                    @if (@session('success'))
                    <div class="alert alert-success text-center">
                        {{session('success')}}
                    </div>

                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del gioco:</label>
                        <input class="form-control" type="text" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo di gioco:</label>
                        <input class="form-control" type="text" name="type">
                    </div>
                    <div class="mb-3">
                        <label for="players" class="form-label">Numero di giocatori:</label>
                        <input class="form-control" type="number" name="players">
                    </div>

                    <div class="mb-3">
                        <label for="instructor" class="form-label">Istruttore:</label>
                        <input class="form-control" type="text" name="instructor">
                    </div>
                    <div class="text-center ">
                        <button class="btn btn-primary">
                            Inserisci nel database
                        </button>
                    </div>
                    {{-- <label for=""></label>
                    <input type="text" name="">
                    <button type="submit"></button> --}}
                </form>
            </div>
        </div>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
