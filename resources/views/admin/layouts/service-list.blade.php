@extends('admin.master')

@section('content')

    <h1>service list</h1>
    <a href="{{route('admin.service.create')}}" class="btn btn-success">service</a>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">category</th>
        <th scope="col">cost</th>
        <th scope="col">Price</th>
        <th scope="col">picture</th>
        <th scope="col">Detail</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>hair cut</td>
        <td>hair service</td>
        <td>200</td>
        <td>500</td>
        <td>picture</td>
        <td>cut with wash</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>prdicure</td>
        <td>pedicure and manicure</td>
        <td>200</td>
        <td>400</td>
        <td>picture</td>
        <td>clean your feet</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>gold facial</td>
        <td>facial</td>
        <td>800</td>
        <td>1000</td>
        <td>picture</td>
        <td>make healthy skin</td>

        <td>make your skin glow</td>
    </tr>
    </tbody>
</table>
@endsection
