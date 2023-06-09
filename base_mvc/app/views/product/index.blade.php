@extends('layout.main')
@section('content')
    <table>
        <tr>
            <td>ID</td>
            <td>Tên sản phẩm</td>
            <td>Giá</td>
            <td>Hành động</td>
        </tr>
        @foreach($products as $pr)
        <tr>
            <td>{{ $pr->id }}</td>
            <td>{{ $pr->ten_sp }}</td>
            <td>{{ $pr->gia }}</td>
            <td>
                <a href="{{ route('detail-product/'.$pr->id) }}">Sửa</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
