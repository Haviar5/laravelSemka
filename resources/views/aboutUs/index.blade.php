
@extends('layouts.app')
@section('content')
    <div class="pozadie">

        <div class = "papier">

            <h1 class = nadpis1> ABOUT US</h1>
            <b>


                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu euismod lectus, a pulvinar purus. Pellentesque nec lacinia magna. Aenean eget libero ac nulla pulvinar rutrum. Donec fermentum nisi dapibus neque accumsan, vel pellentesque libero eleifend. Nullam ac sapien vitae nisl vehicula scelerisque. Sed tincidunt neque sit amet tortor aliquet, sed condimentum erat placerat. Fusce ultricies faucibus odio, ut malesuada erat blandit vitae. Duis pellentesque diam sollicitudin laoreet tristique. Praesent eu dui ac velit ornare condimentum. Maecenas condimentum vulputate hendrerit.

                Donec vehicula est nec leo hendrerit gravida. Vestibulum tristique mauris aliquam, congue justo vel, rutrum nisl. Curabitur ornare porttitor ex, id lobortis purus efficitur sed. Vestibulum gravida ipsum sit amet elementum gravida. Vestibulum pulvinar scelerisque condimentum. Phasellus ultricies ornare leo. Donec vitae orci non massa malesuada tristique nec eu purus. Cras molestie, nunc at rhoncus sagittis, nunc ex vestibulum ipsum, non consectetur metus elit in eros.

                Quisque fringilla libero dui, vel venenatis ante pharetra ac. Vivamus euismod purus a aliquam tempor. Mauris dictum mi et elementum suscipit. Praesent ultrices, lorem eget viverra dapibus, tortor enim aliquet ante, at tincidunt nisl massa non elit. Vestibulum tempus vitae est accumsan rhoncus. Ut consectetur velit lectus, quis luctus leo suscipit congue. Nulla velit metus, eleifend sit amet magna at, tempor sagittis arcu. Nulla pharetra, purus in dignissim vestibulum, magna orci consequat elit, ac dignissim lectus purus vel urna. Mauris pellentesque purus nec diam consequat, sed faucibus ligula varius. Quisque sit amet augue leo.

                Vestibulum efficitur facilisis nisl quis tempor.

            </b>
        </div>

        <div class = "papier">

            <h1 class = nadpis1> ABOUT TEA</h1>
            <b>


                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu euismod lectus, a pulvinar purus. Pellentesque nec lacinia magna. Aenean eget libero ac nulla pulvinar rutrum. Donec fermentum nisi dapibus neque accumsan, vel pellentesque libero eleifend. Nullam ac sapien vitae nisl vehicula scelerisque. Sed tincidunt neque sit amet tortor aliquet, sed condimentum erat placerat. Fusce ultricies faucibus odio, ut malesuada erat blandit vitae. Duis pellentesque diam sollicitudin laoreet tristique. Praesent eu dui ac velit ornare condimentum. Maecenas condimentum vulputate hendrerit.

                Donec vehicula est nec leo hendrerit gravida.

            </b>
            <ul>

                <li> Lorem ipsum </li>
                <li> Lorem ipsum </li>
                <li> Lorem ipsum </li>


            </ul>
            <b>
                Vestibulum tristique mauris aliquam, congue justo vel, rutrum nisl. Curabitur ornare porttitor ex, id lobortis purus efficitur sed. Vestibulum gravida ipsum sit amet elementum gravida. Vestibulum pulvinar scelerisque condimentum. Phasellus ultricies ornare leo. Donec vitae orci non massa malesuada tristique nec eu purus. Cras molestie, nunc at rhoncus sagittis, nunc ex vestibulum ipsum, non consectetur metus elit in eros.

                Quisque fringilla libero dui, vel venenatis ante pharetra ac. Vivamus euismod purus a aliquam tempor. Mauris dictum mi et elementum suscipit. Praesent ultrices, lorem eget viverra dapibus, tortor enim aliquet ante, at tincidunt nisl massa non elit. Vestibulum tempus vitae est accumsan rhoncus. Ut consectetur velit lectus, quis luctus leo suscipit congue. Nulla velit metus, eleifend sit amet magna at, tempor sagittis arcu. Nulla pharetra, purus in dignissim vestibulum, magna orci consequat elit, ac dignissim lectus purus vel urna. Mauris pellentesque purus nec diam consequat, sed faucibus ligula varius. Quisque sit amet augue leo.

                Vestibulum efficitur facilisis nisl quis tempor.

            </b>
        </div>

        <script>
            //Get the button
            var mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

    </div>

@endsection
