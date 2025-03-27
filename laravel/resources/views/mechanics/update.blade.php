@extends("layout")

@section("content")
<div class="row">
    <div class="col-4">
        <form method="POST" action="{{ route('mechanics.update', ["mechanic" => $mechanic->id]) }}">
            @csrf()
            <div class="form-group mb-3">
                <label>Név</label>
                <input type="text" name="name" class="form-control" value="{{ $mechanic->name }}">
            </div>
            <button type="submit" class="btn btn-success">Mentés</button>
        </form>
    </div>
</div>
@stop