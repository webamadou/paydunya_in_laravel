@extends('layouts/front_layout')

@section('container')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Pricing</h1>
        <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>
    <div class="container">
    <div class="card-deck mb-3 text-center">
        @foreach($formules as $formule)
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">{{$formule->name}}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">{{$formule->storage}} <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                    <li>{{$formule->nbr_user}}</li>
                    <li>{{$formule->storage}}</li>
                    <li>{{$formule->help_center ? 'Email support':''}}</li>
                    <li>Help center access</li>
                    </ul>
                    <a type="button" href="{{route('formule',['formule' => $formule->id])}}" class="btn btn-lg btn-block btn-primary">Commander</a>
                </div>
            </div>
        @endforeach
        <!--<div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Pro</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li>20 users included</li>
                <li>10 GB of storage</li>
                <li>Priority email support</li>
                <li>Help center access</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Enterprise</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li>30 users included</li>
                <li>15 GB of storage</li>
                <li>Phone and email support</li>
                <li>Help center access</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
            </div>
        </div>
    -->
    </div>
    </div>
@endsection
