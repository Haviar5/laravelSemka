<!DOCTYPE html>
@extends('layouts.app')

@section('content')
    <div class="container">

      <div class="mb-3">

            <a href="{{route('feedbackBlog.create')}}" class="btn btn-sm btn-success newFeed" role="button"> Add your feedback </a>

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
                <p class="card-name">Dňa: {{ $feedback->created_at}}</p>
                <p class="card-text">{{ $feedback->text }}</p>
                <a href="{{route('feedbackBlog.edit', $feedback->id)}}" class="btn btn-sm btn-primary" role="button"> Edit </a>
                <a href="javascript:void(0)" onclick="deleteFeedback({{ $feedback->id }})" class="btn btn-sm btn-danger">Delete</a>


            </div>
        @endforeach



    </div>


@endsection

<script>
    function deleteFeedback(id)
    {
        if(confirm("Are you sure?"))
        {
            $.ajax({
                url:'/semkaLaravel/public/feedbackBlog/'+id+'/delete',
                type:'GET',
                success:function(response)
                {
                    $('#rid'+id).remove();
                    location.reload();
                }
            })
        }
    }
</script>
