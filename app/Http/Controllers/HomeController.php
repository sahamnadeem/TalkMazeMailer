<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function index()
    {
        $usersss = DB::table('user_list')->paginate(10);
//        dd($usersss);
        if (request()->ajax()) {

            return DataTables::of($usersss)


                ->toJson();
        }
        return view('home',compact('usersss'));
    }
}
