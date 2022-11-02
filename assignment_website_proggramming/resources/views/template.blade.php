<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DA.UR</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;700&family=Poppins:wght@400;500;600&family=Public+Sans:wght@300;400&family=Roboto:wght@100;300;400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;700&family=Poppins:wght@400;500;600&family=Public+Sans:wght@300;400&family=Raleway:ital,wght@0,300;0,500;0,900;1,300&family=Roboto:wght@100;300;400;500;700&display=swap');
    </style>
</head>

<body>
    <header>
        @include('header')
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer class="mt-4" >
        @include('footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>