<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votre Titre</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">  
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/o6VbyqXQ-scaled.jpg') }}') center/cover no-repeat fixed;
            color: white; 
            font-family: Arial, sans-serif;
        }
        .custom-navbar {
            background-color: rgba(139, 69, 19, 0);
            
        }

        .custom-navbar .navbar-brand,
        .custom-navbar .navbar-nav .nav-link {
            color: white;
        }

        .custom-navbar .navbar-toggler-icon {
            background-color: white;
        }
      
        button {
            background-color: #8b4513;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin-left: 0px;
            margin-top: 0;
        }
        .card{
            height: 500px;
        }
        .card-book {
    background-color: #4b362190; 
    color: #ecf0f1; 
    border-radius: 15px; 
    border:3px solid #856d5b;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); 
    padding: 30px; 
    margin-top: 40px;
    margin-bottom: 20px;
}

.card-book h1 {
    font-size: 24px;
    margin-bottom: 30px; 
}

.card-book p {
    font-size: 16px;
    margin-bottom: 10px; 
}

.card-book img {
    max-width: 100%; 
    border-radius: 10px;
    margin-top: 0px; 
    width: 300px;
    height: 400px;
    margin-left: 150px;
}

 
.btn-download {
            background-color: #937657;
            color: #fff;
           padding-left: 40px;
           padding-right: 40px;
           padding-bottom: 10px;
           padding-top: 10px;
            margin-left: 10px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }

        .btn-download:hover {
            background-color: #625644;
            color: #fff;
        }
.col1{
    margin-top: 20px;
}
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/télécharger-removebg-preview.png') }}" alt="Logo" style="width: 180px ;  height: 100px;  ">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('livres.index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('livres.index') }}">Livres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('emprunts.create') }}">Reserver Livre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('emprunts.index') }}">Historiques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('livres.create') }}">Ajouter livre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('auteurs.index') }}">Liste Auteurs</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
         <div class="card-book ">
            
            <div class="card-body">
                 <div class="row">
                    <div class="col-6 col1">
                        <p class=""><strong>Titre:</strong> {{$livre->titre}}</p>
                        <p class=""><strong>Année de publication:</strong> {{$livre->année_publication}}</p>
                        <p class=""><strong>Genre:</strong> {{ $livre->genre }}</p>
                        <p class=""><strong>Résumé:</strong> {{ $livre->résumé }}</p>
                        <p class=""><strong>Langue:</strong> {{ $livre->langue }}</p>
                        <p class=""><strong>Nombre d'exemplaires:</strong> {{ $livre->nombre_exemplaires }}</p>
                        <p class=""><strong>Disponible:</strong> {{ $livre->disponible }}</p>
                        <p class=""><strong>Auteur:</strong>  @if($livre->auteur)
                            {{ $livre->auteur->nom }}
                        @else
                            N/A
                        @endif</p>
                    </div>
                    <div class="col-sm-6">
                        <img class="img-thumbnail" src="{{asset('/storage/'.$livre->image_couverture)}}" alt="livre image">
                    </div>
                    <div class="bouttons">
                        <div class="mt-4">
                            <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-download">Modifier</a>
                            <form action="{{ route('livres.destroy', $livre->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-download ml-2"> Supprimer</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
