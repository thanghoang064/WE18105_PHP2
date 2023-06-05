@extends('layout.main')
@section('content')
    <table>
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Giá</td>
        </tr>
        @foreach($products as $pr)
        <tr>
            <td>{{ $pr->id }}</td>
            <td>{{ $pr->ten_sp }}</td>
            <td>{{ $pr->gia }}</td>
        </tr>
        @endforeach
    </table>
@endsection
