@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Feedback') }}</div>

                    <div class="card-body">

                        <div class="mb-3">

                            <a href="{{route('feedbackBlog.create')}}" class="btn btn-sm btn-success" role="button"> Add your feedback </a>

                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        @foreach($feedbacks as $feedback)
                            <div class ="blog">

                                <h5>{{ $feedback->title }}</h5>


                                <p class="card-name">Napisal: {{ \App\Models\User::findOrFail($feedback->user_id)->name}}</p>


                                <p class="card-text">{{ $feedback->text }}</p>

                                <a href="{{route('feedbackBlog.delete', $feedback->id)}}" class="btn btn-sm btn-danger" role="button"> Delete </a>



                            </div>



                        @endforeach





                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
