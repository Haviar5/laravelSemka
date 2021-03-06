<!DOCTYPE html>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('My profile') }}</div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                                <tr>
                                    <td>{{Auth::user()->id}}</td>
                                    <td>{{Auth::user()->name}}</td>
                                    <td>{{Auth::user()->email}}</td>
                                </tr>
                            </table>

                            @can('editSelf', App\Models\User::class)
                            <a href="{{route('user.edit', [Auth::user()->id])}} " title="Edit" class="btn btn-sm btn-primary" style="left: 50%;position: relative; transform: translateX(-50%); margin-top: 10px">Edit </a>
                            @endcan



                    </div>
                </div>
            </div>
        </div>

        <button class="newFeed" onclick="hideFunction()">Show/Hide my feedbacks</button>

        <div id="myDIV">

            @foreach($feedbacks as $feedback)
                <div class ="blog">

                    <h5>{{ $feedback->title }}</h5>

                    @if($feedback->opinion == 2)
                        <img class="opinionImg" src="https://www.freeiconspng.com/uploads/facebook-dislike-transparent-25.png" alt="opinionObrazok">
                    @else
                        <img class= "opinionImg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Facebook_like_thumb.png/1196px-Facebook_like_thumb.png" alt="opinionObrazok">
                    @endif

                    <p class="card-name">Napisal: {{ \App\Models\User::findOrFail($feedback->user_id)->name}}</p>
                    <p class="card-text">{{ $feedback->text }}</p>

                    <a href="{{route('feedbackBlog.edit', $feedback->id)}}" class="btn btn-sm btn-primary" role="button"> Edit </a>
                    <a href="{{route('feedbackBlog.delete', $feedback->id)}}" class="btn btn-sm btn-danger" role="button"> Delete </a>

                </div>

            @endforeach



        </div>


    </div>

    <script>
        function hideFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
@endsection
