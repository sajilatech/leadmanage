<?php

namespace App\Http\Controllers;
use App\Models\Employeeuser;
use Illuminate\Http\Request;

class UserController extends Controller
{
     protected $perPage = 10;
    protected $title='Users';
    protected $userName;
   

     public function __construct()
    {
        $this->userName = session('username');
       
     
    }
      function index(){
       
        $records=Employeeuser::paginate($this->perPage);
      
        $data['title']=$this->title;
        $data['login_name']=$this->userName;
       
        $data['records']=$records;
        return view('users/list', $data);
    }

     function create(){
        $data['title']=$this->title;
        $data['login_name']=$this->userName;
      
        return view('users/create', $data);
    }


    function add(Request $request){
         $data['title']=$this->title;
        $validation_array = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            
           
        ];
    
        $res = $request->validate($validation_array);
      

            $input_fields = [
                'employ_name' => $request->input('name'),
                 'employ_phone' => $request->input('phone'),
                'employ_email' => $request->input('email'),
                'username' => $request->input('username'),
                'password' =>bcrypt($request->input('password')), 
              
                ];
               
           Employeeuser::create($input_fields);
    
            return redirect()->route('users.list')
            ->with('success', 'User created successfully.');

    }
}
