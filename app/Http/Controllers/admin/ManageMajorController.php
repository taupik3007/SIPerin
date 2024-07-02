<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Major;
use RealRashid\SweetAlert\Facades\Alert;
use DataTables;
class ManageMajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $major = Major::all();
        // dd($major);
        if ($request->ajax()) {
            $major = Major::all();
            
            return Datatables::of($major)
            // ->removeColumn('usr_id')
            ->addIndexColumn()
            ->addColumn('action', function($row){
                // dd($corp);
                $actionBtn = '<a href="/admin/corp/'.$row->mjr_id.'/edit" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('admin.major.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.major.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required'  => 'Harap di isi.',
           
        ];
        $validated = $request->validate([
            'mjr_name'          => 'required|max:255',
            
            
        ],$messages
        );
        // dd($request);

        $corp = Major::create([
            'mjr_name'      => $request->mjr_name,
           
        ]);
        // dd($corp);
       
        Alert::success('Berhasil', 'Berhasil Menambah jurusan');
        return redirect(route('admin.major.index'));
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
        //
    }
}
