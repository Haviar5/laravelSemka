<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/css.css') }}">

    </head>
    <body>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/semestralka/pictures/slideshow1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="http://localhost/semestralka/pictures/slideshow2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="http://localhost/semestralka/pictures/slideshow3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>




        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class= "papier papier2">

            <h1>NEWS</h1>

        </div>



        <div class = "novinkyTopic">

            <img src="http://localhost/semestralka/pictures/slideshow1.jpg" class="novinkyImg" alt="?" >
            <h1> News 1 </h1>
            <b>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet vestibulum eros. Etiam imperdiet venenatis accumsan. Morbi mollis posuere neque vitae aliquam. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan.
            </b>

        </div>

        <div class = "novinkyTopic novinkyTopic2">

            <img src="http://localhost/semestralka/pictures/slideshow3.jpg" class="novinkyImg" alt="?" >
            <h1> News 2 </h1>
            <b>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet vestibulum eros. Etiam imperdiet venenatis accumsan. Morbi mollis posuere neque vitae aliquam. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan.
            </b>
        </div>


        <div class = "novinkyTopic">

            <img src="http://localhost/semestralka/pictures/slideshow1.jpg" class="novinkyImg" alt="?" >
            <h1> News 3 </h1>
            <b>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet vestibulum eros. Etiam imperdiet venenatis accumsan. Morbi mollis posuere neque vitae aliquam. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan.
            </b>

        </div>

        <div class = "novinkyTopic novinkyTopic2">

            <img src="http://localhost/semestralka/pictures/slideshow2.jpg" class="novinkyImg" alt="?" >
            <h1> News 4 </h1>
            <b>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet vestibulum eros. Etiam imperdiet venenatis accumsan. Morbi mollis posuere neque vitae aliquam. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan. Etiam imperdiet venenatis accumsan.
            </b>
        </div>

    </body>
</html>
