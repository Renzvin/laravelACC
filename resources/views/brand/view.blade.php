@extends('home')

@section('title','SB Admin 2 - CRUD Brand')

@section('content')
{{ csrf_field() }}
<h3>Brand CRUD</h3>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div>
        <a href="{{ url('/createBrand')}}" style="" class="btn btn-success btn-icon-split">
            <span class="text">Create New Brand</span>
        </a>
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="POST"  action="{{url('/searchBrand')}}">
        {{ csrf_field() }}
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search by CD_BRAND" aria-label="Search" aria-describedby="basic-addon2" name="CD_BRAND"/>
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
        </form>
    </div>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>CD_BRAND</>
      <th>DESC_BRAND</th>
      <th>DT_ADDED</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @php $i=1 @endphp
  @foreach($data as $brand)
    <tr >
      <th scope="row">{{$i++}}</th>
      <td>{{$brand->CD_BRAND }}</>
      <td>{{$brand->DESC_BRAND }}</td>
      <td>{{$brand->DT_ADDED  }}</td>
      <td><a href='{{url("/")}}' class="btn btn-secondary">
                        Edit
                    </a>
                    <a href='{{url("/")}}' class="btn btn-danger">
                        Delete
                    </a></td>
    </tr>
    <tr>
      <td scope="row"></td>
      <td></td>
      <td></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection