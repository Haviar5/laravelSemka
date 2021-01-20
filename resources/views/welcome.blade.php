<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Semestralka</title>

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
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <div id="carouselExampleIndicators" class="carousel slide mb-4 carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active " data-bs-interval="3000">
                    <img class="d-block mySlides" src="{{ (url('http://localhost/semestralka/pictures/slideshow1.jpg')) }}" alt="First slide">
                    <div class="slideContent centered">
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img class="d-block mySlides" src="{{ (url('http://localhost/semestralka/pictures/slideshow2.jpg')) }}" alt="Second slide">
                    <div class="slideContent centered">
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img class="d-block mySlides" src="{{ (url('http://localhost/semestralka/pictures/slideshow3.jpg')) }}" alt="Third slide">
                    <div class="slideContent centered">
                    </div>
                </div>
            </div>

        </div>

        @if (Route::has('login'))

                @auth
                    <a class="btn btn-secondary newFeed" href="{{ url('/home') }}" role="button">Home</a>

                @else
                    <a class="btn btn-secondary logBtn" href="{{ route('login') }}" role="button">Login</a>


                    @if (Route::has('register'))
                        <a class="btn btn-secondary regBtn" href="{{ route('register') }}" role="button">Register</a>

                    @endif
                @endauth

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

        <script>

            //Get the button
            var mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function()
            {

                scrollFunction()

            };

            function scrollFunction()
            {

                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
                {

                    mybutton.style.display = "block";

                } else {

                    mybutton.style.display = "none";

                }

            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction()
            {

                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;

            }

        </script>

    </body>


</html>


