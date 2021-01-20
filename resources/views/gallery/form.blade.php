<div class="form-group text-danger">
    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
</div>



<form method="post" action ="{{$action}}">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="title">Titulok</label>
        <input type="text" class="form-control" id="text" name="text" placeholder="obsah" value="{{old('title',  @$model->title)  }}">
    </div>

    <div class="form-group">
        <label for="text">Text</label>
        <input type="text" class="form-control" id="text" name="text" aria-describedby="text" placeholder="text" value="{{old('text',  @$model->title)  }}">
    </div>


    <div class="form-group">
        <label for="text">Citanicko</label>
        <input type="text" class="form-control" id="citanicko" name="citanicko" aria-describedby="text">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary form-control">
    </div>


</form>
