@extends('layouts.layout')

@section('style') 
    <style>

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 70px;
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
        }

        .form-group input {
            width: 100%;
            border: 2px solid #6c5741;
            border-radius: 4px;
            box-sizing: border-box;  
            background-color: #d0c6bbe5;
            color: #050403
        }
        .form-group select {
            width: 100%;
            border: 2px solid #6c5741;
            border-radius: 4px;
            box-sizing: border-box;  
            background-color: #d0c6bbe5;
            color: #050403
        }
        
        .form-group input:last-child {
            margin-right: 0;
        }
        
        button {
            background-color: #937657;
            color: #fff;
            padding: 10px 15px;
            margin-left: 430px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }

        button:hover {
            background-color: #625644;
          
        }
    </style>
@endsection

@section('content')

    <div class="container mt-5">
        <form action="{{route('emprunts.store')}}" method="POST" class="custom-form">
            @csrf
            
            <div class="form-group">
                <label for="livre_id">Livre :</label>
                <select class="form-control" id="livre_id" name="livre_id" required>
                    <option value="">Sélectionner un livre</option>
                    @foreach($livres as $livre)
                        <option value="{{ $livre->id }}">{{ $livre->titre }}</option>
                    @endforeach
                </select>
            </div>
        

            <div class="form-group">
                <label for="date_emprunt">Date d'emprunt :</label>
                <input type="date" class="form-control" id="date_emprunt" name="date_emprunt" required>
            </div>

            <div class="form-group">
                <label for="date_retour">Date de retour :</label>
                <input type="date" class="form-control" id="date_retour" name="date_retour" required>
            </div>

            <button type="submit" class="btn ">Soumettre</button>
        </form>
    </div>

    @endsection