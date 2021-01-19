<div class = "form-group text-danger">

    @foreach($errors->all() as $error)
        {{ $error  }} <br>
    @endforeach

</div>


<form method="post" action="{{$action}}">

    @csrf
    @method($method)

    <div class="form-group row">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title of your post" value="{{old('title', @$model->title)}}">
    </div>

    <div class="form-group row">
        <label for="text">Text</label>
        <input type="text" class="form-control" id="text" name="text"  placeholder="Write your text here" value="{{@$model->text}}">

    </div>

    <div class="form-group">

        <input type="submit" class="btn btn-primary form-control">

    </div>

</form>
