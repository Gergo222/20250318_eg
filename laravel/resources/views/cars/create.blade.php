@extends("layout")

@section("content")
    <div class="row">
        <div class="mx-auto col-4">
            <form method="POST" action="{{ route('cars.create') }}">
                @csrf()
                <div class="form-group">
                    <label>Márka</label>
                    <input type="text" name="brand" class="form-control">
                </div>
                <div class="form-group">
                    <label>Model</label>
                    <input type="text" name="model" class="form-group">
                </div>
                <div class="form-group">
                    <label>Gyártási év</label>
                    <input type="text" name="year" class="form-group">
                </div>
                <button type="submit" class="btn btn-success mt-3">Létrhozás</button>
            </form>
        </div>
    </div>
@stop