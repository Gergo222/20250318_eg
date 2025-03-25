@extends("layout")

@section("content")
    <div class="row">
        <div class="col-12">
            <a href="{{ route('cars.create') }}" class="btn btn-primary">Létrehozás</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Márka</th>
                        <th>Model</th>
                        <th>Gyártási év</th>
                        <th>Szrvíz neve</th>
                        <th>Módositás</th>
                    </tr>
                </thead>
                <tbody>
                    @if(sizeof($cars) > 0)
                        @foreach($cars as $car)
                            <tr>
                                <td>{{ $car->id }}</td>
                                <td>{{ $car->name }}</td>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->year }}</td>
                                <td>{{ $car->service ? $car->service->name : "" }}</td>
                                <td class="d-flex flex-col"><a class="btn btn-warning" href="{{ route('cars.updateForm', ['car' => $car->id])}}">Módositás</a>
                                    <form action="{{ route('cars.delete', ['car' => $car->id]) }}" method="POST">
                                        @csrf()
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Törlés</button>
                                    </form>
                            </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">
                                <h1>Nincs adat</h1>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop