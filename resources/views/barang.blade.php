@extends('layout.main')

@section('breadcrump')
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Barang Page</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Barang Page</li>
            </ol>
        </div>

    </div>
</section>
@endsection

@section('content')
<table class="table text-white">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Price</th>
        <th>Category</th>
    </thead>
    <tbody>
        @foreach ($barang as $b)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $b->name }}</td>
            <td>{{ $b->price }}</td>
            <td>{{ $b->category }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<style>li.page-item span.page-link{
    color: black !important;
    background-color: white !important;
    border-color: black !important;
}
    li.page-item.active span.page-link {
    color: white !important;
    background-color: black !important;
    }</style>
{{ $barang->links() }}
@endsection
