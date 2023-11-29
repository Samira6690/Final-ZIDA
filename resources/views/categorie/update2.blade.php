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
<h1>Modifier une catégorie</h1>

<hr>
<form method="POST" action="/update2/traitement/">
    @csrf
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" value="$categorie->nom" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}"
        id="nom" aria-describedby="nom" name="nom">
        @if($errors->has('nom'))
        <span class="invalid-feedback">{{ $errors->first('nom') }}</span>
        @endif
    </div>
<button type="submit" class="btn btn-success">Modifier une catégorie</button>
</form>
</div>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
<script src="{{ asset('dashboard.js') }}"></script>
</body>
</html>