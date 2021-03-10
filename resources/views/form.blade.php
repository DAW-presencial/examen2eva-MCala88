@extends('layout')

@section('form')

<h1>Formulario:</h1>

<div class="container">
    <form method="POST" action="{{ route('form') }}">
        @csrf

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-8">
        <input name="name" type="text" class="form-control" id="input1s" placeholder="Nombre">
        </div>
    </div>
    <div class="form-group row">
        <label for="lastname1" class="col-sm-2 col-form-label">Direccion</label>
        <div class="col-sm-4">
        <input name="lastname1" type="text" class="form-control" id="input2" placeholder="Primer Apellido">
        </div>
    </div>
    <div class="form-group row">
        <label for="lastname2" class="col-sm-2 col-form-label">CP</label>
        <div class="col-sm-4">
        <input name="lastname2" type="text" class="form-control" id="input3" placeholder="Segundo Apellido">
        </div>
    </div>

    <div class="form-group row">
        <label for="phone" class="col-sm-2 col-form-label">Teléfono</label>
        <div class="col-sm-4">
        <input name="phone" type="text" class="form-control" id="input4" placeholder="Teléfono">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-4">
        <input name="email" type="email" class="form-control" id="input5" placeholder="Email">
        </div>
    </div>
</div>
@endsection