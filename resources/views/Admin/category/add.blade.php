@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
      <h4>Add Shopkeepers</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('insert-category')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control border border-dark" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control border border-dark" name="slug">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description"  rows="3" class="form-control border border-dark"></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox"  class="border border-dark" name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox"  class="border border-dark" name="popular">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control border border-dark" name="meta_title">
                </div>
                {{-- Self Added --}}
                <div class="col-md-12 mb-3">
                    <label for="">Role_as</label>
                    <input type="text" class="form-control border border-dark" name="role_as" value="2" disabled>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Email</label>
                    <input type="text" class="form-control border border-dark" name="email">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Password</label>
                    <input type="text" class="form-control border border-dark" name="password" value="mumtaz123" disabled>
                </div>

                 {{-- <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description"  rows="3" class="form-control border border-dark"></textarea>
                </div>     --}}
                <div class="col-md-12 mb-3">
                   <input type="file" name="image"  class="form-control border border-dark" >
                </div>
                <div class="col-md-12 mb-3">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
  </div>
@endsection
