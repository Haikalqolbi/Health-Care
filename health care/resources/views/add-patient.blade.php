@extends('layouts.default')
@section('content')
<div class="row mt-5 ">
    <h3 class="text-center mb-3">Register {{$vaccine->name}} Patient</h3>
    <form method="POST" action="/register-patient" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="vaccine_id" class="form-label">Vaccine Id</label>
            <input type="text" class="form-control" id="vaccine_id" name="vaccine_id" value="{{$vaccine->id}}" required readonly>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Patient Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="mb-3">
            <div class="row">
                <label for="image_ktp" class="form-label">KTP</label>
                <input type="file" name="image_ktp" class="form-control-file" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No Hp</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection