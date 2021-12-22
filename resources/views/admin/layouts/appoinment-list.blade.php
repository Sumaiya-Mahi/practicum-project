@extends('admin.master')

@section('content')

    <h1>appoinment list</h1>
    <a href="{{route('admin.appoinment.create')}}" class="btn btn-success">Create new appoinment</a>


    <table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Detail</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>hair cut</td>
        <td>500</td>
        <td>cut with wash</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>prdicure</td>
        <td>400</td>
        <td>clean your feet</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>facial</td>
        <td>1000</td>
        <td>make your skin glow</td>
    </tr>
    </tbody>
</table>
@endsection