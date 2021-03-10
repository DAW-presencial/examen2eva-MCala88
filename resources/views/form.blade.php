@extends('layout')

@section('form')

<h1>Formulario centro:</h1>

<div class="container">
    <form method="POST" action="{{ route('Centre') }}">

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Denominacion</label>
        <div class="col-sm-4">
        <input name="name" type="text" class="form-control" id="input1" placeholder="Nombre" value="{{ old('Denominacion') }} required>
        </div>
    </div>
        
     <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Codigo</label>
        <div class="col-sm-4">
        <input name="name" type="text" class="form-control" id="input2" placeholder="Nombre" value="{{ old('Codigo') }} required>
        </div>
    </div>
        
    <div class="form-group row">
        <label for="CIF" class="col-sm-2 col-form-label">CIF</label>
        <div class="col-sm-4">
        <input name="CIF" type="text" class="form-control" id="input3" placeholder="CIF" value="{{ old('CIF') }} required>
        </div>
    </div>
        
    <div class="form-group row">
        <select for="Titularidad" class="col-sm-2 col-form-label">Titularidad</select>
        <div class="col-sm-4">
          <option value="nif" {{ old("Titularidad") == "nif" ? "Publica" : "" }}>Publica</option>
          <option value="nie" {{ old("Titularidad") == "nie" ? "Concertado" : "" }}>Concertado</option>
           <option value="pasaporte" {{ old("Titularidad") == "Privado" ? "selected" : "" }}>Privado</option>
        </div>
    </div>
        
        <div class="form-group row">
        <label for="Dir_postal" class="col-sm-2 col-form-label">Dir_postal</label>
        <div class="col-sm-4">
        <input name="Dir_postal" type="text" class="form-control" id="input4" placeholder="Dir_postal" value="{{ old('Dir_postal') }} required>
        </div>
    </div>
        
    <div class="form-group row">
        <label for="CP" class="col-sm-2 col-form-label">CP</label>
        <div class="col-sm-4">
        <input name="CP" type="text" class="form-control" id="input5" placeholder="CP" value="{{ old('CP') }} required>
        </div>
    </div>

        <div class="form-group row">
        <label for="Director_nom" class="col-sm-2 col-form-label">Director_nom</label>
        <div class="col-sm-4">
        <input name="Director_nom" type="text" class="form-control" id="input6" placeholder="Director_nom" value="{{ old('Director_nom') }} required>
        </div>
    </div>    
        
        
     <div class="form-group row">
        <label for="Direccior_apell" class="col-sm-2 col-form-label">Direcctor_apell</label>
        <div class="col-sm-4">
        <input name="Direccior_apell" type="text" class="form-control" id="input7" placeholder="Primer Apellido" value="{{ old('Director_apell') }} required>
        </div>
    </div>
        
    <div class="form-group row">
        <label for="Direcctor_apell2" class="col-sm-2 col-form-label">Direcctor_apell2</label>
        <div class="col-sm-4">
        <input name="Direcctor_apell2" type="text" class="form-control" id="input8" placeholder="Direcctor_apell2" value="{{ old('Director_apell2') }} required>
        </div>
    </div>
        
    <div class="form-group row">
        <label for="Identificada" class="col-sm-2 col-form-label">Identificada</label>
        <div class="col-sm-4">
        <input name="Identificada" type="text" class="form-control" id="input9" placeholder="Identificada" value="{{ old('Identificada') }} required>
        </div>
    </div>
        
    <div class="form-group row">
        <label for="Tipo_identificadal" class="col-sm-2 col-form-label">Tipo_identificada</label>
        <div class="col-sm-4">
        <input name="Tipo_identificada" type="Tipo_identificada" class="form-control" id="input10" placeholder="Tipo_identificada" value="{{ old('Tipo_identificada') }} required>
        </div>
    </div>
      
</div>
@endsection