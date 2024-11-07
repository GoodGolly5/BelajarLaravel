<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writer</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @include('layout.navbar')
    @include('layout.footer')
<div class = "d-flex-justify-content-center">
    @foreach ($categories as $category)
    <div class = "d-flex flex-column">
        <img src="{{ asset('asset/prof.jpg') }}" alt="Image" class="d-block mx-auto mt-5" style="width: 200px;">
        @if ($category->id == 1)
            <a class="text-center mt-5" href = "/datsci"> {{ $category->Writer }} </a>
        @elseif ($category->id == 2)
            <a class="text-center mt-5"  href = "/netsecure"> {{ $category->Writer }} </a>
        @endif
    </div>
    @endforeach
</div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>