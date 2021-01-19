@extends('layouts.app')

@section('content')
    <div id="avatar1" class="kontaktKarta">

        <div class="kontajner">
            <img src="http://localhost/semestralka/pictures/avatar1.png" alt="Avatar" style="width:100%">
            <div class="overlay">
                <div class="text">Hi, im owner!</div>
            </div>
            <h4><b>John Owner</b></h4>
            <p>Owner</p>
            <button type="button" class="btn btn-secondary contactButton" data-container="body" data-toggle="popover" data-placement="bottom" data-content="owner@mail.com">
                Contact
            </button>
        </div>
    </div>

    <div id="avatar2" class="kontaktKarta">

        <div class="kontajner">
            <img src="http://localhost/semestralka/pictures/avatar2.png" alt="Avatar" style="width:100%">
            <div class="overlay">
                <div class="text">Hi, im waitress!</div>
            </div>
            <h4><b>Andrea Waitress</b></h4>
            <p>Waitress</p>
            <button type="button" class="btn btn-secondary contactButton" data-container="body" data-toggle="popover" data-placement="bottom" data-content="waitress@mail.com">
                Contact
            </button>
        </div>
    </div>

    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })

    </script>
@endsection
