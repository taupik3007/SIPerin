<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;

use App\Models\User;

use DataTables;
  
class MyTestController extends Controller
{
    /**
     //handle yajra datatable views and data
     */
    public function dataTableLogic(Request $request)
    {
        if ($request->ajax()) {
            $users = User::select('*');
            return datatables()->of($users)
                ->make(true);
        }
          
        return view('y-dataTables');
    }
}