@extends('layouts.default')
@section('content')


<h3 class="text-center mt-5 mb-5">List Vaccine</h3>
<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach($vaccines as $vaccine)
    <div class="col">
        <div class="card mb-5 h-100">
            <img src="img/vaccine/{{$vaccine->image}}" class="card-img-top" height="300" alt="...">
            <div class="card-body">
                <h4 class="card-title">{{$vaccine->name}}</h4>
                <p class="card-text mb-3 text-muted">Rp {{$vaccine->price}}</p>
                <p class="card-text">{{$vaccine->description}}</p>
            </div>
            <div class="card-footer">
                    <div class="d-grid gap-2">
                        <a href="/add-patient/{{$vaccine->id}}" class="btn btn-primary">Vaccine Now</a>
                    </div>
                </div>
        </div>
    </div>
    @endforeach
</div>
@endsection