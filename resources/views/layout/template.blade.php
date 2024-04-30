<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simple Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="header">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home">Simple Website</a>
                </div>
                <ul class="nav navbar-nav">
                    <li @if(Request::is('home')) class="active" @endif><a href="home">Home</a></li>

                    <li @if(Request::is('about')) class="active" @endif><a href="about">About Us</a></li>

                    <li @if(Request::is('contact')) class="active" @endif><a href="contact">Contact Us</a></li>

                    <li @if(Request::is('list')) class="active" @endif><a href="list">Messages</a></li>
                </ul>
            </div>
        </nav>
    </div>

    @if(Request::is('home'))
    <div class="container">
        <div class="jumbotron">
            <h1>Welcome!!</h1>
            <p>This is simple website with contact form and display content in "<a href="list">Messages</a>" page.</p>
        </div>
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @yield('content')
            </div>
            <div class="col-md-4">
                <div class="well">
                    <ul class="list-group">
                        <li class="list-group-item">First item</li>
                        <li class="list-group-item">Second item</li>
                        <li class="list-group-item">Third item</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p class="text-center">Copyright @2024 Simple Website.</p>
    </div>

</body>

</html>