@extends('layouts.default')
@section('content')

    @if(!App\Models\vaksin::exists())
    <div class="row mt-5 text-center">
        <p class="text-muted">There is no data....</p>
        <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-primary" href="{{ url('create') }}" role="button">Add Vaccine</a>
        </div>
    </div>
    @else
    <section>
        <div class="container mt-4">
            <div class="">
                <h3 class='text-center mb-5'>List Vaccine</h3>
                <div class="">
                    <a href="{{ url('create') }}" class="btn btn-primary">Add Vaccine</a>
                </div>
                <table class="table table-light mt-2 table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    @foreach ($data as $dataVaccine)
                    <tbody>
                      <tr>
                        <th scope="row">{{ $dataVaccine->id }}</th>
                        <th scope="row">{{ $dataVaccine->name }}</th>
                        <th scope="row">{{ $dataVaccine->price }}</th>
                        <th scope="row">{{ $dataVaccine->description }}</th>
                        <th scope="row"><img src='{{ $dataVaccine->image }}'></th>
                        <th scope="row">
                            <a href="{{ url('/edit-vaccine/'.$dataVaccine->id) }}" class='btn btn-warning'>Edit</a>
                            <a href='{{ url('/destroy/'.$dataVaccine->id) }}' class='btn btn-danger'>Delete</a>
                        </th>
                      </tr>
                    </tbody>

                    @endforeach

                  </table>
            </div>
        </div>
    </section>
    @endif

@endsection