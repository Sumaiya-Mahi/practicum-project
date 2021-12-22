@extends('admin.master')


@section('content')

    <h1>Create a category</h1>

    <form action="{{route('admin.category.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Category Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter category Description</label>
            <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
