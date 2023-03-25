 @extends('base.base')

 @section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
 @endsection

 @section('content')
 <div class="container pt-3">
     <a href="{{route('tasks.index')}}" class="btn btn-primary">Go to List</a>
 </div>
 <div class="d-flex justify-content-center pt-5">
     <form method="POST" action="{{route('tasks.update', $task->id)}}">
        @method('PUT')
        <h1 class="h1">Formulario Edit</h1>
        @csrf
        @if (session()->has('success'))
        <div class="alert alert-info" role="alert">
            {{session()->get('success')}}
          </div>
        @endif
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" value="{{@old('name') ?? $task->name}}" class="form-control" id="exampleInputEmail1"  placeholder="name task">
          @error('name')
            <div id="emailHelp" class="form-text">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <textarea name="description" cols="2" class="form-control" id="exampleInputPassword1" placeholder="description to tasks">{{@old('description') ?? $task->description}}</textarea>
          @error('description')
            <div id="emailHelp" class="form-text">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date</label>
            <input value="{{@old('date') ?? $task->date}}" type="date" name="date" class="form-control" id="date">
            @error('date')
                <div id="emailHelp" class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Is complete</label>
            <select name="status" class="form-control" id="">
                <option value="0" @if ($task->status) selected @endif>No complete</option>
                <option value="1" @if ($task->status) selected @endif>Complete</option>
            </select>
            @error('date')
                <div id="emailHelp" class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
      </form>
</div>
 @endsection
