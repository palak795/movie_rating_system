<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('profiles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view ('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        $this->validate($request,[
        'movie_name'  => 'required',
        'movie_title' => 'required',
        'movie_description' => 'required',
        'file' => 'required',
        
    ]);
        
        
        $crud = new Movie;
        $crud->movie_title=$request->get('movie_title');
        $crud->movie_name=$request->get('movie_name');
        $crud->movie_description=$request->get('movie_description');

        $filename = '';
        if($request->hasFile('file'))
        {
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('file',$filename);
        }
        $crud->file=$filename;
        $crud->save();
        return redirect()->route('movie.index')->with('success','data inserted successfully'); 

        
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
        $crud=Movie::find(decrypt($id));
        
        return view('profiles.edit',compact('crud'));
    }


    public function editprofile()

    {
        
        $users = User::find(\Auth::user()->id);
    
        return view('profiles.profile',compact('users'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function updateprofile(Request $request)

    {
        $users = User::findorfail(\Auth::user()->id);

        $users->name=$request->get('name');
        $users->email=$request->get('email');
        $users->password=hash::make('password');
        $users->save();

        return redirect()->route('movie.index')->with('success','profile updated successfully '); 

        
    }
    public function update(Request $request, $id)
    {

        $this->validate($request,[
        'movie_name'  => 'required',
        'movie_title' => 'required',
        'movie_description' => 'required',
        'file' => 'required',

    ]);

        $crud = Movie::findorfail($id);
        $crud->movie_title=$request->get('movie_title');
        $crud->movie_name=$request->get('movie_name');
        $crud->movie_description=$request->get('movie_description');

        $filename = '';
        if($request->hasFile('file'))

        {
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('file',$filename);
        }

        else

        {
           $filename=$crud->file;

        }

        $crud->file=$filename;

        $crud->save();

        return redirect()->route('movie.index')->with('success','data update successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud=Movie::find(decrypt($id));
        $crud->delete();
        return redirect()->route('movie.index')->with('error','data deleted successfully'); 
    }

    public function getPageResult(Request $request)
    {
        $totalData = 0;
        
        $columns = array(
            0 => 'id',
            1 => 'movie_title',
            2 => 'movie_name',
            3 => 'description',
            4 => 'file',
            5 => 'action',
        );

        $limit = $request->input('length');
        $start = $request->input('start');
        $start = $start ? $start / $limit : 0;
        $order = $columns[$request->input('order.0.column')];
        $dir =   $request->input('order.0.dir');
        $students = Movie::orderBy('id', 'Asc');
        $totalData = $students->count();

        if (!empty($request->input('search.value'))) {
            $search = $request->input('search.value');
            $cruds = $students->where('id', 'LIKE', "%{$search}%")
                ->orWhere('movie_title', 'LIKE', "%{$search}%")
                ->orWhere('movie_name', 'LIKE', "%{$search}%");
        }
        $students = $students->paginate($limit, ['*'], 'page', $start + 1);
        $totalFiltered = $students->total();
        $data = array();
        if (!empty($students)) {
            foreach ($students as $key => $crud) {
               
                $nestedData['id'] = $crud->id;
                $nestedData['movie_title'] = $crud->movie_title;
                $nestedData['movie_name'] = $crud->movie_name;
                $nestedData['movie_description'] = $crud->movie_description;
                $nestedData['file'] =  "<img src='" . asset('file/' . $crud->file) . "' style='width:100px'>";
    
                $edit = route('movie.edit', encrypt($crud->id));
                $delete = route('movie.destroy', encrypt($crud->id));
                $exist = $crud;
                $nestedData['action'] = view('profiles.setting-action', compact('edit', 'delete', 'exist'))->render();
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );

        return json_encode($json_data);
    }
}
