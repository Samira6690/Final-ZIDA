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
<h1>Creer un profil</h1>

<hr>
<form method="POST" action="/ajouter/traitement/">
    @csrf
    <div class="form-group">
        <label for="nom_entreprise">Nom_entreprise</label>
        <input type="text" class="form-control {{ $errors->has('nom_entreprise') ? 'is-invalid' : '' }}"
        id="nom_entreprise" aria-describedby="nom_entreprise" name="nom_entreprise">
        @if($errors->has('nom_entreprise'))
        <span class="invalid-feedback">{{ $errors->first('nom_entreprise') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="contact">Contact</label>
        <input type="text" class="form-control  {{ $errors->has('contact') ? 'is-invalid' : '' }}" id="contact" name="contact">
        @if($errors->has('contact'))
        <span class="invalid-feedback">{{ $errors->first('contact') }}</span>
        @endif
    </div>
  <div class="form-group">
    <label for="localisation">Localisation</label>
    <input type="text" class="form-control  {{ $errors->has('localisation') ? 'is-invalid' : '' }}" id="localisation" name="localisation">
    @if($errors->has('localisation'))
    <span class="invalid-feedback">{{ $errors->first('localisation') }}</span>
    @endif
</div>
<div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" class="form-control  {{ $errors->has('photo') ? 'is-invalid' : '' }}" id="" name="photo">
    @if($errors->has('photo'))
    <span class="invalid-feedback">{{ $errors->first('photo') }}</span>
    @endif
</div>
<button type="submit" class="btn btn-success">Ajouter un styliste</button>
</form>
</div>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
</body>


</html>