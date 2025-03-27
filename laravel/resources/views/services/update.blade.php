@extends("layout")

@section("content")
    <div class="row">
        <div class="col-4">
            <form method="POST" action="{{ route('services.update', ["service" => $service->id]) }}">
                @csrf()
                <div class="form-group mb-3">
                    <label>Név</label>
                    <input type="text" name="name" class="form-control" value="{{ $service->name }}">
                </div>
                <div class="form-group mb-3">
                    <label>Kapacitás</label>
                    <input type="text" name="capacity" class="form-control" value="{{ $service->capacity}}">
                </div>
                <button type="submit" class="btn btn-success">Mentés</button>
            </form>
        </div>
    </div>
@stop