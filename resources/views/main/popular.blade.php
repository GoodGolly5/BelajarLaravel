<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @include('layout.navbar')
    @include('layout.footer')
    <div class="container mt-5">
        <div class="row">
            @foreach ($courses as $course)
            @include ('layout.card', ['course' => $course])
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $courses->links('pagination::bootstrap-5') }}
        </div>
    </div>
</body>
</html>