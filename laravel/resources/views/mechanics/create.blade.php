@extends("layout")

@section("content")
    <div class="row">
        <div class="col-4">
            <form method="POST" action="{{ route('mechanics.create') }}">
                @csrf()
                <div class="form-group mb-3">
                    <label>Név</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <button type="submit" class="btn btn-success mt-3">Létrehozás</button>
            </form>
        </div>
    </div>
@stop