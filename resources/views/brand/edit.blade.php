@extends('home')

@section('title','SB Admin 2 - Create Brand')

@section('content')
<form method="GET" action="{{url('/updateBrand', array($data[0]->CD_BRAND))}}">
        {{ csrf_field() }}
        <fieldset>
            <legend>Edit Brand Data</legend>

            <label for="CD_BRAND">Code Brand : </label>
            <input type="text" min="1" class="form-control" name="CD_BRAND" value="{{ $data[0]->CD_BRAND }}" disabled>

            <label for="DESC_BRAND">Description Brand : </label>
            <input type="text" min="1" class="form-control" name="DESC_BRAND" value="{{ $data[0]-> DESC_BRAND }}">

            <br>
            <button type="submit" class="btn btn-success">Submit</button>
        </fieldset>
    </form>
@endsection