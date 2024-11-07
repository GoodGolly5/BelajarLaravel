<head>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<nav class="navbar">
    <div class="navbar-container">

        <div class="navbar-logo">
            <a href="{{ route('test1') }}">
                <img src="{{ asset('asset/amir.png') }}" alt="Logo" />
            </a>
        </div>
        
        <div class="navbar-menu">
            <a href="{{ route('home') }}" class="navbar-item">Home</a>
            <div class="navbar-item dropdown">
                <button class="dropbtn">Categories ⁝</button>
                <div class="dropdown-content">
                    <a href="{{ route('datsci') }}">Data Science</a>
                    <a href="{{ route('netsecure') }}">Network Security</a>
                </div>
            </div> 
            <a href="{{ route('writer') }}" class="navbar-item">Writers</a>
            <a href="{{ route('about') }}" class="navbar-item">About Us</a>
            <a href="{{ route('popular') }}" class="navbar-item">Popular</a>
             
        </div>
    </div>
</nav>