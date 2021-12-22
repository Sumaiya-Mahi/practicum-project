@extends('admin.master')


@section('content')

<h1>Category list</h1>
<a href="{{route('admin.category.create')}}" class="btn btn-success">Create new category</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">price range</th>
        <th scope="col">detail</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>hair service</td>
        <td>300-1500</td>
        <td>treat your hair</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>facial service</td>
        <td>500-2000</td>
        <td>treat your face</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>makeup service</td>
        <td>1000-5000</td>
        <td>makeup yourself</td>
    </tr>
    </tbody>
</table>
@endsection
