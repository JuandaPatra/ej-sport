<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Riders;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $isAdmin = Auth::user();

        if($isAdmin->email != 'super@admin.com'  && $isAdmin->email !='syahril.anwar@b7leap.com'){
            return redirect('/');

        }

        $datas = User::where('email', '!=', 'super@admin.com')->where('email','!=', 'syahril.anwar@b7leap.com')->get();
        

        

        return view('admin.users.index', compact('datas'));
    }
    
    public function table(Request $request)
    {
        if ($request->ajax()) {
            // $data = User::with('roles')->select('*');
            $data = User::with('roles:name');

            return Datatables::of($data)
                ->addIndexColumn()
                // ->addColumn('finish_date', function ($row) {
                //     $date = date("d F Y h:m", strtotime($row->created_at));
                //     return $date;
                // })
                ->addColumn('roles', function ($user) {
                    $roles = $user->roles->first()->name;
                    // $rolef = $roles->name;
                    return  ucfirst($roles);
                })
                ->addColumn('action', function ($user) {


                    return '
                    <a href="" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</a>
                    
                    <a href="" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>';

                   
                })

                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', '=', $id)->first();
        try {
            $user->delete();
            Alert::success('Delete User Admin', 'Berhasil');
        } catch (\throwable $th) {
            Alert::error('Delete User Admin', 'error' . $th->getMessage());
        }
        return redirect()->back();
    }

    public function delete($id)
    {
        $user = User::where('id', '=', $id)->first();
        try {
            $user->delete();
            Alert::success('Delete User ', 'Berhasil');
        } catch (\throwable $th) {
            Alert::error('Delete User ', 'error' . $th->getMessage());
        }
        return redirect()->back();
    }
}
