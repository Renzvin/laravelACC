@extends('home')

@section('title','SB Admin 2 - Create Brand')

@section('content')
<form method="POST" action="{{url('/updateBrand'), array($data[0]->CD_BRAND)}}">
        {{ csrf_field() }}
        <fieldset>
            <legend>Edit Brand Data</legend>

            <label for="CD_BRAND">Code Brand : </label>
            <input type="text" min="1" class="form-control" name="CD_BRAND" value="{{ $data->CD_BRAND }}">

            <label for="DESC_BRAND">Description Brand : </label>
            <input type="text" min="1" class="form-control" name="DESC_BRAND" value="{{ $data-> DESC_BRAND }}">

            <br>
            <button type="submit" class="btn btn-success">Submit</button>
        </fieldset>
    </form>
@endsection