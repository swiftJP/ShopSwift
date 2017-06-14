<!DOCTYPE html>
<html>
<head>
    <title>Madting</title>
    <!---Bootstrap--->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<!---Navigation bar--->
<div class="container">
    @yield('navbar')
</div>

<!---Main Content--->
<div class="container">
    @yield('content')
</div>

<!---Include the footer--->
<div class="container">
    @include('footer')
</div>

</body>

</html>