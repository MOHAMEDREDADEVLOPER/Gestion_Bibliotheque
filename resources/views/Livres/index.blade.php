@extends('layouts.layout')

@section('style') 
    <style>
        .div1{
            padding-left: 70px
        }
    </style>
@endsection

@section('content')
   
<div class="container mt-5">
    <div class="row">
        @foreach($livres as $livre)
            <div class="col-md-4 mb-4">
                <div class="div1">
                   <a href="{{ route('livres.show', $livre->id) }}"> <img class="card-img-top" src="{{ $livre->image_couverture }}" alt="livre image" style="width: 220px ; height: 300px;">
                   </a>
                </div>
            </div>
        @endforeach
    </div>
   
</div>

@endsection