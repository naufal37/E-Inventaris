<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use PhpParser\Node\Stmt\Return_;
use Validator;
use Session;

class UserController extends Controller
{

    public function __construct()
    {
    $this->middleware('auth');
    $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_pengguna = User::all();
        $pagination = User::paginate(5);
        $jumlah_pengguna = User::count();
        return view('user.user',compact('list_pengguna','pagination','jumlah_pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data,[
            'name' => 'required|max:150',
            'email' => 'required|max:150|unique:users,email',
            'password' => 'required|confirmed|min:4',
            'level' => 'required|in:siswa,admin,operator',
        ]);
        if($validator->fails()){
            return redirect('pengguna/create')->withInput()->withErrors($validator);}

        //Encrypt Password
        $data['password']=bcrypt($data['password']);
        User::create($data);
        Session::flash('flash_message','Data Pengguna Berhasil Ditambahkan!');
        return redirect('pengguna');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.detail',compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('user.edit',compact('data'));
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

        $user = User::findOrFail($id);
        $data = $request->all();
        $validator = Validator::make($data,[
            'name' => 'required|max:150',
            'email' => 'required|max:150|unique:users,email,'.$request->input('id'),
            'password' => 'nullable|confirmed|min:4',
            'level' => 'required|in:siswa,admin,operator',
        ]);
        if($validator->fails()){
            return redirect('pengguna/'.$id.'/edit')->withInput()->withErrors($validator);}

        if(!empty($request->input('password')))
        {
            $data['password']=bcrypt($data['password']);

        }
        else
        {
            $data = array_except($data, ['password']);
        }

        $user->update($data);

        Session::flash('flash_message','Data Pengguna Berhasil DiEdit!');
        Session::flash('edit',true);

        return redirect('pengguna');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        Session::flash('flash_message','Data Pengguna Berhasil DiHapus!');
        Session::flash('hapus',true);
        return redirect('pengguna');
    }
}
