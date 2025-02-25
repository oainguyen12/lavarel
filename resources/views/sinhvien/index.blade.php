@extends('layouts.app')

@section('title', 'Danh sách sinh viên')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-end mb-3">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Đăng xuất</button>
            </form>
        </div>

        <h2 class="text-center">Danh Sách Sinh Viên</h2>

        <a href="{{ route('sinhvien.create') }}" class="btn btn-success mb-3">Thêm Sinh Viên</a>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Mã SV</th>
                    <th>Họ Tên</th>
                    <th>Ngày Sinh</th>
                    <th>Giới Tính</th>
                    <th>Địa Chỉ</th>
                    <th>SĐT</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sinhvien as $sv)
                    <tr>
                        <td>{{ $sv->MaSV }}</td>
                        <td>{{ $sv->HoTen }}</td>
                        <td>{{ $sv->NgaySinh }}</td>
                        <td>{{ $sv->GioiTinh }}</td>
                        <td>{{ $sv->DiaChi }}</td>
                        <td>{{ $sv->SDT }}</td>
                        <td>
                            <a href="{{ route('sinhvien.edit', $sv->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <form action="{{ route('sinhvien.destroy', $sv->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
