@extends('welcome')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        
        <a href="{{ route('all.post') }}" class="btn btn-info">All Post</a>
        <hr>

        <form action="{{ url('update/post/'.$post->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="control-group">
            <div class="form-group ">
              <label>Post Title</label>
              <input type="text" class="form-control" value="{{ $post->title }}" name="title" required data-validation-required-message="Please enter your post title.">
            </div>

          </div>
          <div class="control-group">
            <div class="form-group ">
              <label>Select Category</label>
              <select class="form-control" name="category_id">
                @foreach($category as $row)
              	<option value="{{ $row->id }}" <?php if($row->id == $post->category_id) echo "selected"; ?> >{{ $row->name }}</option>
              	@endforeach 
              </select>
		  </div>

          </div>
          <div class="control-group col-xs-12">
            <div class="form-group">
              <label>New Image</label>
              <input type="file" class="form-control" name="image" >
              Old Image: <img src="{{ URL::to($post->image) }}" style="height: 40px; width: 80px;"> 
              <input type="hidden" name="old_photo" value="{{ $post->image }}">
		  </div>

          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 ">
              <label>Post Details</label>
              <textarea rows="5" class="form-control" required name="details">
              {{ $post->details }}
              </textarea>

		  </div>

          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection