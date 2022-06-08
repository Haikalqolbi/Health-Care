@extends('layouts.default')
@section('content')
    <section>
        <div class="container  mt-5" style="align-items:center">
            <h5 class="mx-auto text-center " style="font-weight:bold">Update Vaccine</h5>
                <form action="{{ url('/update/'.$data->id) }}" id="create" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail4">Vaccine Name</label>
                        <input type="text" class="form-control" id="inputEmail4" name="name" placeholder=" " value="{{$data->name}}">
                    </div>        
                    <div class="form-group">
                        <label for="inputEmail4">Price</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text">Rp.</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" name="price" placeholder="  " value="{{$data->price}}">
                        </div>        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="  " >{{$data->description}}</textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                        <label for="inputZip">Image</label>
                        <input type="file" class="form-control" id="inputstock" name="image" value="{{$data->image}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4" >Edit Vaccine</button>
                </form>
        </div>
    </section>
@endsection