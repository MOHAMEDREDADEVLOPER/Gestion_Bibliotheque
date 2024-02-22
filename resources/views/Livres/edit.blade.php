

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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url('{{ asset('images/o6VbyqXQ-scaled.jpg') }}') center/cover no-repeat fixed;
            color: white;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 70px;
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

        .custom-form {
            border: 3px solid #917354;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 50px;
            width: 100%;
            background-color: #4b362190;
            margin: auto;
            border-radius: 25px;
        }

        .form-group {
            margin-bottom: 20px;
            overflow: hidden;
            width: 900px;
        }

        
        .form-group input {
            width: 48%;
            float: left;
            margin-right: 4%;
            border: 2px solid #6c5741;
            border-radius: 4px;
            box-sizing: border-box;  
            background-color: #d0c6bbe5;
            color: #050403
        }
        .form-control::placeholder {
              color: #000000; 
         }

        .form-group input:last-child {
            margin-right: 0;
          
        }
        
        .btn {
            background-color: #937449;
            color: #fff;
            padding-left: 70px;
           padding-right: 70px;
           padding-bottom: 10px;
           padding-top: 10px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            margin-left: 720px;
            margin-top: 15px;
        }
        .btn:hover {
            background-color: #886e49;
        }
    </style>
    
    
    <title>Titre de la page</title>
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
    
    <div class="container mt-5">

        <form action="{{ route('livres.update',  $livre->id) }}" method="POST" enctype="multipart/form-data" class="custom-form">
            @csrf
            @method('PUT')

            <!-- Title and Year of publication -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="titre" required placeholder="Titre" value="{{ $livre ? $livre->titre : '' }}">
                        @error('titre')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="année_publication" required placeholder="Année Publication" value="{{ $livre ? $livre->année_publication : '' }}">
                    </div>
                </div>
            </div>

            <!-- Genre and Summary -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="genre" required placeholder="Genre" value="{{ $livre ? $livre->genre : '' }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="résumé" required placeholder="Résumé" value="{{ $livre ? $livre->résumé : '' }}">
                    </div>
                </div>
            </div>

            <!-- Language and Number of copies -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="langue" required placeholder="Langue" value="{{ $livre ? $livre->langue : '' }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="number" class="form-control" name="nombre_exemplaires" step="1" required placeholder="Nombre d'exemplaires" value="{{ $livre ? $livre->nombre_exemplaires : '' }}">
                    </div>
                </div>
            </div>

            <!-- Availability and Author ID -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="disponible" value="1" {{ $livre && $livre->disponible ? 'checked' : '' }}>
                            <label class="form-check-label" for="disponible">Cochez si disponible</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nom" required placeholder="Nom de l'auteur" value="{{ $livre ? $livre->auteur_id : '' }}">
                    </div>
                </div>
            </div>

            <!-- Book cover image -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="prenom" required placeholder="Prenom de l'auteur" value="{{ $livre ? $livre->auteur_id : '' }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" class="form-control" name="image_couverture" placeholder="Image Couverture">
                    </div>
                </div>
            </div>

            <!-- Submit button -->
            <div class="row">
                <div class="col eng">
                    <button type="submit" class="btn">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
