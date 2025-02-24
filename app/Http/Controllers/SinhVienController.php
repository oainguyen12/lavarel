<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SinhVien;
use Illuminate\Support\Facades\DB;

class SinhVienController extends Controller
{
    public function index()
    {
        $sinhvien = SinhVien::all();
        return view('sinhvien.index', compact('sinhvien'));
    }

    public function create()
    {
        return view('sinhvien.create');
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'MaSV' => 'required|unique:sinhvien|max:10',
            'HoTen' => 'required|string|max:255',
            'NgaySinh' => 'required|date',
            'GioiTinh' => 'required|string',
            'DiaChi' => 'required|string|max:255',
            'SDT' => 'required|string|max:15',
        ]);

        SinhVien::create($request->all());

        return redirect()->route('sinhvien.index')->with('success', 'Thêm sinh viên thành công!');
    }

    public function edit($id)
    {
        $sinhvien = SinhVien::findOrFail($id);
        return view('sinhvien.edit', compact('sinhvien'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'MaSV' => 'required|max:10|unique:sinhvien,MaSV,' . $id,
            'HoTen' => 'required|string|max:255',
            'NgaySinh' => 'required|date',
            'GioiTinh' => 'required|string',
            'DiaChi' => 'required|string|max:255',
            'SDT' => 'required|string|max:15',
        ]);

        $sinhvien = SinhVien::findOrFail($id);
        $sinhvien->update($request->all());

        return redirect()->route('sinhvien.index')->with('success', 'Cập nhật thành công!');
    }

    public function destroy($id)
    {
        $sinhvien = SinhVien::findOrFail($id);
        $sinhvien->delete();

        return redirect()->route('sinhvien.index')->with('success', 'Xóa thành công!');
    }
}
