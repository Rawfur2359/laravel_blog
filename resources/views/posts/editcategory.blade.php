@extends('welcome')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        
        	<a href="{{ route('add.category') }}" class="btn btn-danger">Add Category</a>
        	<a href="{{ route('all.category') }}" class="btn btn-info">All Category</a>
        <hr>
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="{{ url('update/category/'.$data->id) }}" method="post" >
          @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category Name</label>
              <input type="text" class="form-control" value="{{ $data->name }}" name="name" >
            </div>
            <!-- required data-validation-required-message="Please enter your category name." -->

          </div>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Slug Name</label>
              <input type="text" class="form-control" value="{{ $data->slug }}" name="slug" >
            </div>

          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection