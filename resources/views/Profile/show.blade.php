@extends('layouts.app')
@section('content')

<h3>{{$profile->lastname}}</h3>
@if(!$work)
<form method="POST" action="/work/{{$profile->id}}">
  @csrf
  <div class="row my-4">
    <div class="col-12 my-2">
      <span>Profession/Work</span>
    </div>
    <div class="col-12">
      <input class="form-control @error('profession') is-invalid @enderror" type="text" name="profession" value="{{ old('profession') }}" autocomplete="off" autofocus/>
      @error('profession')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
  </div>
  
  <div class="row my-4">
    <div class="col-12 my-2">
      <span>Workplace</span>
    </div>
    <div class="col-12">
      <input class="form-control @error('workplace') is-invalid @enderror" type="text" name="workplace" value="{{ old('workplace') }}" autocomplete="off" autofocus/>
    </div>
  </div>
  
  <div class="row my-4">
    <div class="col-12 text-right">
      <button type="Submit" class="btn btn-dark">Submit</button>
    </div>
  </div>
  
</form>
@else
<span>Display dara of work</span>
@endif
@endsection