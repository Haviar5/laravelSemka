@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">{{ __('Users') }}</div>

                    <div class="card-body">

                        @can('create', App\Models\User::class)
                        <div class="mb-3">

                            <a href="{{route('user.create')}}" class="btn btn-sm btn-success" role="button"> Add new user </a>

                        </div>
                        @endcan

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {!! $grid->show() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
