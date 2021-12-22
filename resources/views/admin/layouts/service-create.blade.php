@extends('admin.master')


@section('content')

    <h1>Service list</h1>

    <form action="{{route('admin.service_type.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Id</label>
            <input name="name" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">category</label>
            <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">cost</label>
            <input name="description" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">price</label>
            <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">picture</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">detail</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
