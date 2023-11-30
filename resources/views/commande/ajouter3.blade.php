
<h1>Creer une commande</h1>

<hr>
<form method="POST" action="/ajouter3/traitement/">
    @csrf
    <div class="form-group">
        <label for="date-commande">Date-commande</label>
        <input type="text" class="form-control {{ $errors->has('date-commande') ? 'is-invalid' : '' }}"
        id="date-commande" aria-describedby="date-commande" name="date-commande">
        @if($errors->has('date-commande'))
        <span class="invalid-feedback">{{ $errors->first('date-commande') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="montant">Prix-avance</label>
<input type="text" name="prix-avance" id="prix-avance" class="form-control  {{ $errors->has('prix-avance') ? 'is-invalid' : '' }}"></input>
@if($errors->has('prix-avance'))
<span class="invalid-feedback">{{ $errors->first('prix-avance') }}</span>
@endif
  </div>
<div class="form-group">
        <label for="quantité">Quantité</label>
<input type="text" name="quantité" id="quantité" class="form-control  {{ $errors->has('quantité') ? 'is-invalid' : '' }}"></input>
@if($errors->has('quantité'))
<span class="invalid-feedback">{{ $errors->first('quantité') }}</span>
@endif
  </div>
  <div class="mb-3">
<select class="form-select" aria-label="Default select example" name="styliste">
        <option value="selected">Sélectionnez un styliste</option>
        @foreach ($stylistes as $styliste)
        <option value="{{ $styliste->id }}">
            {{ $styliste->nom }}
        </option>
        @endforeach
</select>
<select class="form-select" aria-label="Default select example" name="produit">
    <option value="selected">Sélectionnez un produit</option>
    @foreach ($produits as $produit)
    <option value="{{ $produit->id }}">
        {{ $commande-> }}
    </option>
    @endforeach
</select>
</div>
<button type="submit" class="btn btn-success">Ajouter un produit</button>

</form>
</div>
@endsection
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
</body>
</html>
