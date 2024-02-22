<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">  

    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url('{{ asset('images/o6VbyqXQ-scaled.jpg') }}') center/cover no-repeat fixed;
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

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 0px;
            margin-top: 250px;
            margin-left: 60px;
          
        }

        .rev {
            border: 3px solid #917354;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 80px;
            width: 800px;
            background-color: #4b362190;
            margin: auto;
            border-radius: 25px;
            margin-left: 0px;
           
        }

        .btn-download {
            background-color: #937657;
            color: #fff;
            padding: 10px 15px;
            margin-left: 148px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }

        .btn-download:hover {
            background-color: #625644;
            color: #fff;
        }
        .image{
            width: 120px; 
            height: 120px ; 
            margin-left: 273px;
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="rev">
                    <img src="{{ asset('images/alert_3438023.png') }}" alt="" class="image">
                    <p style="{{"padding-top: 20px; padding-left: 120px;" }}">Voulez-vous télécharger la fiche en format PDF ou Excel ?</p>
                    <div class="mt-4">
                        <a href="{{ route('download1.fiche', ['format' => 'pdf']) }}" class="btn btn-download">Télécharger en PDF</a>
                        <a href="{{ route('download2.fiche', ['format' => 'excel']) }}" class="btn btn-download ml-2">Télécharger en Excel</a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
