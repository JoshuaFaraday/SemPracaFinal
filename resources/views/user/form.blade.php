
<form method="post" action ="{{$action}}"> {{--premenna zavisi ci budeme vytvarat noveho uzivatela alebo editovat existujuceho--}}
    @csrf {{--ochrana formulara aby sa to nedalo poslat inym sposobom--}}
    @method($method) {{--metoda ktorou sa čo bude posielat--}}
    <div class="form-group">
        <label for="name">Full name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="{{ @$model->name  }}">
    </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email" value="{{old('name',  @$model->email)  }}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>

    <div class="form-group">
        <label for="password">Password again</label>
        <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Password">
    </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary form-control">
        </div>


</form>
