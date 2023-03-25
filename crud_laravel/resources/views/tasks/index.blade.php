@extends('base.base')

@section('title')
lista de tareas
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
@endsection

@section('content')
<div class="d-flex justify-content-center pt-5">
    <form method="POST">
        @csrf
        @if (session()->has('success'))
        <div class="alert alert-info" role="alert">
            {{session()->get('success')}}
          </div>
        @endif
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" value="{{@old('name')}}" class="form-control" id="exampleInputEmail1"  placeholder="name task">
          @error('name')
            <div id="emailHelp" class="form-text">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <textarea name="description" cols="2" class="form-control" id="exampleInputPassword1" placeholder="description to tasks">{{@old('description')}}</textarea>
          @error('description')
            <div id="emailHelp" class="form-text">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date</label>
            <input value="{{@old('date')}}" type="date" name="date" class="form-control" id="date">
            @error('date')
                <div id="emailHelp" class="form-text">{{ $message }}</div>
            @enderror
          </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
</div>
@endsection

