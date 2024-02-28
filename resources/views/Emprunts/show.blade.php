@extends('layouts.layout')

@section('style') 
    <style>
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
@endsection

@section('content')
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

@endsection
