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
    @include('styliste.nav2')

<div class="container">
<h1>Modifier une commande</h1>
<hr>
<form method="POST" action="/update3/traitement/">
    @csrf
    <div class="form-group">
        <label for="date-commande">Date-commande</label>
        <input type="text" value="date-commande" class="form-control {{ $errors->has('date-commande') ? 'is-invalid' : '' }}"
        id="date-commande" aria-describedby="date-commande" name="date-commande">
        @if($errors->has('date-commande'))
        <span class="invalid-feedback">{{ $errors->first('date-commande') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="montant">Prix-avance</label>
<input type="text" value="commande->prix-avance" name="prix-avance" id="prix-avance" class="form-control  {{ $errors->has('prix-avance') ? 'is-invalid' : '' }}"></input>
@if($errors->has('prix-avance'))
<span class="invalid-feedback">{{ $errors->first('prix-avance') }}</span>
@endif
  </div>
<div class="form-group">
        <label for="quantité">Quantité</label>
<input type="text" value="commande->quantité" name="quantité" id="quantité" class="form-control  {{ $errors->has('quantité') ? 'is-invalid' : '' }}"></input>
@if($errors->has('quantité'))
<span class="invalid-feedback">{{ $errors->first('quantité') }}</span>
@endif
  </div>
  <div class="mb-3">
<select class="form-select" aria-label="Default select example" name="styliste">
        <option value="selected">Sélectionnez un styliste</option>
        @foreach ($stylistes as $styliste)
        <option value="{{ $styliste->id }}">
            {{ $styliste->nom_entreprise }}
        </option>
        @endforeach
</select>
<select class="form-select" aria-label="Default select example" name="produit">
    <option value="selected">Sélectionnez un produit</option>
    @foreach ($produits as $produit)
    <option value="{{ $produit->id }}">
        {{ $produit->produit }}
    </option>
    @endforeach
</select>
</div>
<button type="submit" class="btn btn-success">Modifier un produit</button>

</form>
</div>
@endsection
