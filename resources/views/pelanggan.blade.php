@extends('layout.main')

@section('breadcrump')
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Pelanggan Page</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Pelanggan Page</li>
            </ol>
        </div>

    </div>
</section>
@endsection

@section('content')
<table class="table text-white">
    <thead>
        <th>No</th>
        <th>Name</th>
        <th>Address</th>
        <th>phone number</th>
        <th>gender</th>
    </thead>
    <tbody>
        @foreach ($pelanggan as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->address }}</td>
            <td>{{ $p->phone_number }}</td>
            <td>{{ $p->gender }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
