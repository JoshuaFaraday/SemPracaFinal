
<form method="post" action ="{{$action}}"> {{--premenna zavisi ci budeme vytvarat noveho uzivatela alebo editovat existujuceho--}}
    @csrf {{--ochrana formulara aby sa to nedalo poslat inym sposobom--}}
    @method($method) {{--metoda ktorou sa čo bude posielat--}}
    <div class="form-group">
        <label for="popis">Title</label>
        <input type="text" class="form-control" id="popis" name="popis" placeholder="Name of game" value="{{ @$model->popis  }}">
    </div>
    <div class="form-group">
        <label for="text">Text of review</label>
        <input type="text" class="form-control" id="text" name="text"  placeholder="Enter Review" value="{{old('name',  @$model->text)  }}">
    </div>

    <div class="form-group">
        <label for="hodnotenie">Points</label>
        <input type="text" class="form-control" id="hodnotenie" name="hodnotenie" placeholder="Points for example: 95/100">
    </div>


    <div class="form-group">
        <input type="submit" class="btn btn-primary form-control">
    </div>


</form>
