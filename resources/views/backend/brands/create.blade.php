@extends('backend_master')

@section('content')

	<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Brands </h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <h2 class="d-inline-block">Brand Create Form</h2>
              <a href="{{route('brands.index')}}" class="btn btn-outline-primary float-right">
                  <i class="icofont-double-left"></i>
              </a>
              <form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Brand Name" name="name">
                  @error('name')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPhoto">Photo</label>
                  <input type="file" class="form-control @error('photo') is-invalid @enderror" id="exampleInputphoto" name="photo">
                  @error('photo')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>
          </div>
        </div>

      </div>

    </main>
@endsection