
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="{{asset('assets/js/color-modes.js')}}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Dashboard des stylistes</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css.map')}}">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/dashboard.rtl.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/dashboard.css.map')}}" rel="stylesheet">
  </head>

  <body>
    @include('styliste.dashboard')

     <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
      <a href="{{ route('/ajouter') }}"><button class="btn btn-primary">Ajouter</button></a>

      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nom_entreprise</th>
              <th scope="col">Contact</th>
              <th scope="col">Localisation</th>
              <th scope="col">Photo</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php
            $ide = 1;
        @endphp
        @foreach ($stylistes as $styliste)
            <tr>
              <td>{{ $styliste->nom_entreprise }}></td>
              <td>{{ $styliste->contact }}</td>
              <td>{{ $styliste->localisation }}</td>
              <td><img src="/images/{{ $styliste->photo }}" alt="" style="width: 60px; height: 60px; border-radius: 50px"></td>
              <td><button style="background-color: blue";>update</button></td>
              <td><button style="background-color: red";>delete</button></td>
            </tr>
            @php
        $ide += 1;
    @endphp
    @endforeach
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
</body>