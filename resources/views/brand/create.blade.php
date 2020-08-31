<form method="POST" action="{{url('/insertBrand')}}">
    {{ csrf_field() }}
    <fieldset>
        <legend>Input Brand Data</legend>

        <label for="CD_BRAND">Code Brand : </label>
        <input type="text" min="1" class="form-control" name="CD_BRAND" >

        <label for="DESC_BRAND">Description Brand : </label>
        <input type="text" min="1" class="form-control" name="DESC_BRAND" >

        <input type="hidden" min="1" class="form-control" name="FUNCTION" value="insert">

        <br>
        <button type="submit" class="btn btn-success">Submit</button>
    </fieldset>
</form>