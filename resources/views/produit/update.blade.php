<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="{{asset('js/color-modes.js')}}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Dashboard des stylistes</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css.map')}}">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard.rtl.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard.css.map')}}" rel="stylesheet">
  </head>
  <body>
    @include('produit.nav3')
<div class="container">
<h1>Modifier un produit</h1>

<hr>
<form method="POST" action="/update/traitement">
    @csrf
    <input type="text" name="id" style="display:none" value="{{ $produit->id}}">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" value="{{$produit->nom}}" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}"
        id="nom" aria-describedby="nom" name="nom">
        @if($errors->has('nom'))
        <span class="invalid-feedback">{{ $errors->first('nom') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" value="{{$produit->image }}" class="form-control  {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image" name="image">
        @if($errors->has('image'))
        <span class="invalid-feedback">{{ $errors->first('image') }}</span>
        @endif
    </div>
  <div class="form-group">
    <label for="montant">Montant</label>
    <input type="text" value="{'$produit->montant}}" class="form-control  {{ $errors->has('montant') ? 'is-invalid' : '' }}" id="montant" name="montant">
    @if($errors->has('montant'))
    <span class="invalid-feedback">{{ $errors->first('montant') }}</span>
    @endif
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="text" value="{{$produit->description}}" class="form-control  {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" name="description">
    @if($errors->has('description'))
    <span class="invalid-feedback">{{ $errors->first('description') }}</span>
    @endif
</div>

<div class="mb-3">
    <select class="form-select" aria-label="Default select example" name="categorie">
        <option value="{{ $produit->categorie->id }}">{{ $produit->categorie->nom }}</option>
        @foreach ($categories as $categorie)
        <option value="{{ $categorie->id }}">
            {{ $categorie->nom }}
        </option>
        @endforeach
</select>
</div>
<button type="submit" class="btn btn-success">Modifier un produit</button>
</form>
</div>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
</body>
</html>
