@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4">Danh sách Sinh Viên</h2>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-2 mb-4">{{ session('success') }}</div>
        @endif

        <a href="{{ route('sinhvien.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Thêm Sinh Viên</a>

        <table class="w-full mt-4 border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border p-2">Mã SV</th>
                    <th class="border p-2">Họ Tên</th>
                    <th class="border p-2">Ngày Sinh</th>
                    <th class="border p-2">Giới Tính</th>
                    <th class="border p-2">Địa Chỉ</th>
                    <th class="border p-2">SĐT</th>
                    <th class="border p-2">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sinhvien as $sv)
                    <tr class="text-center">
                        <td class="border p-2">{{ $sv->MaSV }}</td>
                        <td class="border p-2">{{ $sv->HoTen }}</td>
                        <td class="border p-2">{{ $sv->NgaySinh }}</td>
                        <td class="border p-2">{{ $sv->GioiTinh }}</td>
                        <td class="border p-2">{{ $sv->DiaChi }}</td>
                        <td class="border p-2">{{ $sv->SDT }}</td>
                        <td class="border p-2">
                            <a href="{{ route('sinhvien.edit', $sv) }}"
                                class="bg-yellow-500 text-white px-3 py-1 rounded">Sửa</a>
                            <form action="{{ route('sinhvien.destroy', $sv) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
