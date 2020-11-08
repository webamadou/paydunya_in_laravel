@extends('layouts.front_layout')
@section('container')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <form action="{{route('purchase')}}" method="post" >
            <h1 class="display-4">{{$formule->name}} - {{$formule->price}}FCFA</h1>
            <p class="lead">{{$formule->title}}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Prix : {{$formule->price}}FCFA</li>
                <li class="list-group-item">Nombre d'utilisateurs :{{$formule->nbr_users}}</li>
                <li class="list-group-item">Storage :{{$formule->storage}}</li>
                <li class="list-group-item">:{{$formule->email_support ?'Support par email':''}}</li>
                <li class="list-group-item">:{{$formule->help_center ?'Acces au help desk':''}}</li>
            </ul>
            @csrf
            <input type="hidden" name="name" value="{{$formule->name}}">
            <input type="hidden" name="price" value="{{$formule->price}}">
            <input type="hidden" name="nbr_user" value="{{$formule->nbr_user}}">
            <input type="hidden" name="storage" value="{{$formule->storage}}">
            <input type="hidden" name="email_support" value="{{$formule->email_support}}">
            <input type="hidden" name="help_center" value="{{$formule->help_center}}">
            <button type="submit" class="btn btn-primary my-2 btn-lg btn-block"><h1>Confirmer la commande</h1></button>
        </form>
    </div>
@endsection
