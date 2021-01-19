<div class = "form-group text-danger">

    @foreach($errors->all() as $error)
        {{ $error  }} <br>
    @endforeach

</div>


<form method="post" action="{{$action}}">

    @csrf
    @method($method)

    <div class="form-group row">
        <label for="name">Full name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="My Name" value="{{old('name', @$model->name)}}">

    </div>


    <div class="form-group row">
        <label for="mail">Email</label>
        <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" placeholder="email@example.com" value="{{@$model->email}}">

    </div>

    <div class="form-group row">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">

    </div>

    <div class="form-group row">
        <label for="password">Confirm password</label>
        <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Password">

    </div>

    <div class="form-group">

        <input type="submit" class="btn btn-primary form-control">

    </div>

</form>



