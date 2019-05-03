@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('paul.store') }}">
          <div class="form-group">
              @csrf
              <label for="prefix">Prefix Name:</label>
              <input type="text" class="form-control" name="prefix"/>
          </div>
          <div class="form-group">
              <label for="suffix">Suffix Number :</label>
              <input type="integer" class="form-control" name="suffix"/>
          </div>
          <div class="form-group">
              <label for="numunit">Numunit:</label>
              <input type="integer" class="form-control" name="numunit"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
