<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Corp;
use App\Models\CorpProfile;


use DataTables;


class CorpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $corp = Corp::select('*');
            
            return Datatables::of($corp)
            // ->removeColumn('usr_id')
            ->addIndexColumn()
            ->addColumn('action', function($row){
                // dd($corp);
                $actionBtn = '<a href="/admin/corp/'.$row->crp_id.'/edit" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('admin.corp.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.corp.create');
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
            'crp_name'          => 'required|max:255',
            'crp_sector'        => 'required|max:255',
            'crpp_work_system'  => 'required'
            
        ],$messages
        );
        // dd($request);

        $corp = Corp::create([
            'crp_name'      => $request->crp_name,
            'crp_sector'    => $request->crp_sector
        ]);
        // dd($corp);
        $corpProfile = CorpProfile::create([
            'crpp_corp_id'      => $corp->id,
            'crpp_work_system'  => $request->crpp_work_sytem
        ]);

        return redirect(route('admin.corp.index'));

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
