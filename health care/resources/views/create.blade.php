@extends('layouts.default')
@section('content')
    <section>
        <div class="container  mt-5" style="align-items:center">
            <h5 class="mx-auto text-center " style="font-weight:bold">Insert Vaccine</h5>
                <form action="{{ url('/store') }}" id="create" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="inputEmail4">Vaccine Name</label>
                        <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="">
                    </div>
        
                    <div class="form-group">
                        <label for="inputEmail4">Price</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text">Rp.</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" name="price" placeholder="">
                        </div>        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder=""></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                        <label for="inputZip">Image</label>
                        <input type="file" class="form-control" id="inputstock" name="image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4" >Add Vaccine</button>
                </form>
        </div>
    </section>
@endsection