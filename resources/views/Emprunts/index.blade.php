@extends('layouts.layout')

@section('style') 
    <style>
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
@endsection

@section('content')
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

@endsection