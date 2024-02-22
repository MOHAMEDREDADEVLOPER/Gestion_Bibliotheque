<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        .nav-item {
            color: white;
        }

        .custom-navbar .navbar-toggler-icon {
            background-color: white;
        }
       
        .div2{
            background-color: #3f2817ba;
            color: #ffffff;
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            padding: 50px;
            font-size: 30px;
            margin: 125px;
            border:  2px solid #937657;
            border-radius: 7px;
        }
        button {
            background-color: #937657;
            color: #fff;
            padding-left: 44px;
            padding-right: 40px;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-top: 20px;
            margin-left: 0px;
            border:none ;
            border-radius: 25px;
            cursor: pointer;
            
        }
        button:hover {
            background-color: #8d6b46;
            color: #fff;
            padding-left: 44px;
            padding-right: 40px;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-top: 20px;
            margin-left: 0px;
            border:none ;
            border-radius: 25px;
            cursor: pointer;
            
        }
.books{
    color: #ffffff;
    font-size: 30px;

    
}
.books:hover {
            color: #fff;
        }

     
    </style>

    <title>Votre Titre</title>
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
    

    <div class="div2">
        <p>N'arrêtez jamais d'apprendre </br>  parce que la vie n'arrête jamais d'enseignerg    </br>
         <button> <a class="books" href="{{ route('livres.index') }}" >Livres</a></button></p>
    </div>

 

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
