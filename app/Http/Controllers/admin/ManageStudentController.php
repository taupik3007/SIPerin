<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

use DataTables;

class ManageStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $major = Major::all();
        // dd($major);
        if ($request->ajax()) {
            $user = User::all();
            
            return Datatables::of($user)
            // ->removeColumn('usr_id')
            ->addIndexColumn()
            ->addColumn('action', function($row){
                // dd($corp);
                $actionBtn = '<a href="/admin/student/'.$row->usr_id.'/detail" class="edit btn btn-success btn-sm">Detail</a> <a href="/admin/student/'.$row->usr_id.'/edit" class="edit btn btn-success btn-sm">Edit</a> <a href="/admin/student/'.$row->usr_id.'/destroy" class="btn btn-danger btn-sm" data-confirm-delete="true">Hapus</a> 
                ';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        $title = 'Hapus Siswa!';
        $text = "Yakin Menghapus Siswa?";
        confirmDelete($title, $text);

        return view ('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $user = User::findOrFail($id)->delete();
        Alert::success('berhasi Menghapus', 'Siswa Berhasil Dihapus');
        return redirect(route('admin.student.index'));
    }
}
