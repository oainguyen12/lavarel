@extends('layouts.app')

@section('title', 'Chỉnh sửa Sinh Viên')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Chỉnh Sửa Sinh Viên</h2>

        <form action="{{ route('sinhvien.update', $sinhvien->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Mã SV</label>
                <input type="text" name="MaSV" class="form-control" value="{{ $sinhvien->MaSV }}" required>
            </div>

            <div class="mb-3">
                <label>Họ Tên</label>
                <input type="text" name="HoTen" class="form-control" value="{{ $sinhvien->HoTen }}" required>
            </div>

            <div class="mb-3">
                <label>Ngày Sinh</label>
                <input type="date" name="NgaySinh" class="form-control" value="{{ $sinhvien->NgaySinh }}" required>
            </div>

            <div class="mb-3">
                <label>Giới Tính</label>
                <select name="GioiTinh" class="form-control">
                    <option value="Nam" {{ $sinhvien->GioiTinh == 'Nam' ? 'selected' : '' }}>Nam</option>
                    <option value="Nữ" {{ $sinhvien->GioiTinh == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Địa Chỉ</label>
                <input type="text" name="DiaChi" class="form-control" value="{{ $sinhvien->DiaChi }}" required>
            </div>

            <div class="mb-3">
                <label>Số Điện Thoại</label>
                <input type="text" name="SDT" class="form-control" value="{{ $sinhvien->SDT }}" required>
            </div>

            <button type="submit" class="btn btn-success">Cập Nhật</button>
        </form>
    </div>
@endsection
