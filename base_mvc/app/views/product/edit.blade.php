@extends('layout.main')
@section('content')
    @if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']) )
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif
    <form action="{{ route("edit-product/".$product->id) }}" method="POST">
        <table>
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="ten_sp" value="{{ $product->ten_sp }}"/></td>
            </tr>
            <tr>
                <td>Đơn giá</td>
                <td><input type="text" name="don_gia" value="{{ $product->gia }}"/></td>
            </tr>
            <tr>
                <td><input type="submit" name="nut" value="Sửa"/></td>
            </tr>
        </table>
    </form>
@endsection
