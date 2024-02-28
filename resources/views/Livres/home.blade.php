@extends('layouts.layout')

@section('style')
<style>
    .div2 {
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
        border: none;
        border-radius: 25px;
        cursor: pointer;
    }
    button:hover {
        background-color: #8d6b46;
    }
    .books {
        color: #ffffff;
        font-size: 30px;
    }
    .books:hover {
        color: #fff;
    }
</style>
@endsection

@section('content')
<div class="div2">
    <p>N'arrêtez jamais d'apprendre <br> parce que la vie n'arrête jamais d'enseigner <br>
    <button> <a class="books" href="{{ route('livres.index') }}">Livres</a></button></p>
</div>
@endsection
