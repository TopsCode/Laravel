<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\RegisterModel;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cruidapp.register');
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

        // validate a field in form or validations
        $request->validate([
         'f_name'=>'required',
         'l_name'=>'required',
         'u_name'=>'required',
         'e_mail'=>'required',
         'password'=>'required',
         'gender'=>'required',
         'mob'=>'required',
         'address'=>'required',
        ]);

        //upload your photo here
         $image=$request->file('img');
         $new_name=rand().'.'.$image->getClientOriginalExtension();
         $image->move(public_path('uploads'),$new_name);
        
        $data=array(
            'photo'=>$new_name,   
            'firstname'=>$request->f_name,
            'lastname'=>$request->l_name,
            'username'=>$request->u_name,
            'email'=>$request->e_mail,
            'password'=>$request->password,
            'gender'=>$request->gender,
            'mobile'=>$request->mob,
            'address'=>$request->address
        );

        RegisterModel::create($data);
        return redirect('showdata')->with('success','Thanks for Create Your account with Us'); 


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
          
        $shw=RegisterModel::all();
        return view('cruidapp.showalldata',['shw'=>$shw]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function read($id)
    {
          
        $shw=RegisterModel::where('rid',$id)->first();
        return view('cruidapp.readdata',['shw'=>$shw]);

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ed=RegisterModel::where('rid',$id)->first();
        return view('cruidapp.editdata',['ed'=>$ed]);
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

         //upload your photo here
         $image=$request->file('img');
         $new_name=rand().'.'.$image->getClientOriginalExtension();
         $image->move(public_path('uploads'),$new_name);
        
        $ed=array(
            'photo'=>$new_name,   
            'firstname'=>$request->f_name,
            'lastname'=>$request->l_name,
            'username'=>$request->u_name,
            'email'=>$request->e_mail,
            'gender'=>$request->gender,
            'mobile'=>$request->mob,
            'address'=>$request->address
        );

        RegisterModel::where('rid',$id)->update($ed);
        return redirect('showdata')->with('success','Your data is Updateed succesfully'); 

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          
        RegisterModel::where('rid',$id)->delete();
        return redirect('showdata')->with('del','Your Data Successfuly Deleted');

    }

}
