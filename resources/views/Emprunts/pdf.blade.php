<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titre de la page</title>
 
  
</head>
<body>

    <div class="container">
       <h1>HELLO STORE BOOK</h1>
        <div class="row justify-content-center">
                        <div class="row">
                           <div class="col-6">
                            @foreach($emprunts as $emprunt)
                               <p class=""><strong>Titre du livre:</strong> {{ $emprunt->livre->titre }}</p>
                               <p class=""><strong>Nom d'utilisateur :</strong> {{ $emprunt->user->name }}</p>
                               <p class=""><strong>Date Emprunt :</strong> {{ $emprunt->date_emprunt }}</p>
                               <p class=""><strong>Date Retour :</strong> {{ $emprunt->date_retour }}</p>
                               @endforeach
                           </div>
            </div>
        </div>
    </div>
  

  </body>
</html>
