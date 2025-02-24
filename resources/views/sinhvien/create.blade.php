@extends('layouts.app')

@section('title', 'Thêm Sinh Viên')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Thêm Sinh Viên</h2>

        <form action="{{ route('sinhvien.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Mã SV</label>
                <input type="text" name="MaSV" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Họ Tên</label>
                <input type="text" name="HoTen" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Ngày Sinh</label>
                <input type="date" name="NgaySinh" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Giới Tính</label>
                <select name="GioiTinh" class="form-control">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Địa Chỉ</label>
                <input type="text" name="DiaChi" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>SĐT</label>
                <input type="text" name="SDT" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection
