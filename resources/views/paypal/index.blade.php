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
        <main class="container">
            <div class="card mt-5">
              <div class="card-header">
                <h1 class="text-3xl md:text-5xl font-extrabold text-center uppercase mb-12 bg-gradient-to-r from-indigo-400 via-purple-500 to-indigo-600 bg-clip-text text-transparent transform -rotate-2">Make A Payment</h1>
              </div>
              <div class="card-body text-center">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('make.payment') }}" method="POST">
                        @csrf
                        <label for="amount">Amount:</label>
                        <input type="number" name="amount" id="amount" step="0.01" required>
                        <button type="submit" class="w-full bg-indigo-500 uppercase rounded-xl font-extrabold text-black px-6 h-8">Pay with PayPal👉</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>