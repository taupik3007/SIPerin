<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\User;

use RealRashid\SweetAlert\Facades\Alert;
use DataTables;

class ManageClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {

        // $class= Classes::with('cls_major')->get();
        // dd($class);

        if ($request->ajax()) {
            $class = Classes::with('cls_major')->get();
            
            return Datatables::of($class)
            // ->removeColumn('usr_id')
            ->addIndexColumn()
            ->addColumn('major', function($row){
                // dd($corp);
                $actionBtn = $row->cls_major->mjr_name;
                return $actionBtn;
            })
            ->rawColumns(['major'])
            ->addColumn('action', function($row){
                // dd($corp);
                $actionBtn = '<a href="/admin/class/'.$row->cls_id.'/edit" class="edit btn btn-success btn-sm">Edit</a> <a href="/admin/class/'.$row->cls_id.'/destroy" class="btn btn-danger btn-sm" data-confirm-delete="true">Hapus</a> 
                ';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            
            ->make(true);
        }
        $title = 'Hapus Jurusan!';
        $text = "Yakin Menghapus Jurusan?";
        confirmDelete($title, $text);

       
        return view('admin.class.index');
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
        $userCheck = User::where('usr_class_id',$id)->first();
        if($userCheck){
            Alert::error('Gagal Menghapus', 'Masih Ada Siswa Yang Pada kelas');
            return redirect(route('admin.class.index'));
        }

        $class = Classes::findOrFail($id)->delete();
        Alert::success('berhasi Menghapus', 'kelas Berhasil Dihapus');
        return redirect(route('admin.class.index'));
    }
}
