<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau Des livres</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/o6VbyqXQ-scaled.jpg') }}') center/cover no-repeat fixed;
            color: white; 
            font-family: Arial, sans-serif;
        }
        .custom-navbar {
            background-color: rgba(255, 143, 63, 0);
        }

        .custom-navbar .navbar-brand,
        .custom-navbar .navbar-nav .nav-link {
            color: white;
        }
        .nav-item {
            color: white;
        }

        .custom-navbar .navbar-toggler-icon {
            background-color: white;
        }
        .div1{
            padding-left: 70px
        }
        strong{
            color: #d0ad87;
        }
        .container{
            margin-top: 80px;
        }
       
        .div1{
            margin-bottom: 55px;
            border: 2px solid #caa886; 
            width: 100%;
            background-color: #4b3621d7;
           
        }
       .btn{
        background-color: #c37425d7;
       }
       .image{
            width: 45px; 
            height: 45px ; 
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
        <ul class="list-group"> 
            @foreach ($emprunts as $emprunt)
                <li class="list-group-item d-flex justify-content-between align-items-center div1">
                    <strong>Livre:</strong> {{ $emprunt->livre->titre }} <br>
                    <strong>Date d'emprunt:</strong> {{ $emprunt->date_emprunt }} <br>
                    <strong>Date de retour:</strong> {{ $emprunt->date_retour }} <br>
                    <form action="{{ route('emprunts.destroy', $emprunt->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Annuler</button>
                    </form>
                   <a href="{{route('emprunts.show',$emprunt->id)}}"><img src="{{ asset('images/download_5947524.png') }}" alt="" class="image"></a> 
                </li>
            @endforeach
        </ul>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAy
