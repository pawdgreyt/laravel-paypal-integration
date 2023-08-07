<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>{{ config('app.name', 'Laravel') }}</title>
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  
    <style type="text/css">
        i{
            font-size: 50px;
        }
    </style>
</head>
<body>
    <div id="app">
        <main class="container mt-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="/air2.png" style="width:100%; border-radius: 3px;">
                </div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">Air Jordan 1 Low</h1>
                    <div class="small mb-1">Nike</div>
                    <div class="fs-5 mb-5">
                        <span>Php 7,500</span>
                    </div>
                    <p class="lead">The Air Jordan 1 Low remakes the classic sneaker with new colours and textures. Premium materials and accents give fresh expression to an all-time favourite.</p>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('make.payment') }}" method="POST">
                        <input type="hidden" name="amount" value="7500">
                        @csrf
                        <button type="submit" class="btn btn-outline-dark">Pay with PayPal👉</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>