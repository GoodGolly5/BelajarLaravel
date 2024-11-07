<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @include('layout.navbar')
    @include('layout.footer')
    <div class="content">
        
        <div class="row d-flex justify-content-center my-2">
    <div class="col-xl-6 col-lg-8 col-12">
      <img class="w-100" src="{{ asset('asset/propplane.png') }}" alt="edufun-home">
    </div>

    <div class="container mt-5">
        <div class="row">
            @foreach ($courses as $course)
            @include ('layout.card', ['course' => $course])
            @endforeach
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
