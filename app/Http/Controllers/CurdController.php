<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CurdModel;
use Illuminate\Support\Facades\DB;
class CurdController extends Controller
{
    
   
    
    
    
    function Home(){
    

        $data=CurdModel::get();

        return view('Home',['dataKey'=>$data]);
    }


    function SingleView($id){
    
        $newint=(int)$id;
        
        $data=CurdModel::where(['id'=>$newint])->get();

        return view('Update',['dataKey'=>$data]);
    }
    function Delete($id){
    
        $newint=(int)$id;
        $data=CurdModel::get();
        $delete=CurdModel::where(['id'=>$newint])->delete();
      
        
        return redirect()->to('/'); 


        
    
    }



    function Create(Request $req){
        $name=$req->input('name');
        $username=$req->input('username');
        $email=$req->input('email');
        $phone=$req->input('phone');

        $insert=CurdModel::insert([
            "name"=>$name,"username"=>$username,"email"=>$email,"phone"=>$phone
        ]);
        
        if($insert==true){
            return 'Customer Created Success';
           
        }else{
            return "Customer Creation Failed";
        }
    }



    







    function UpdateData(Request $req){
        $id=$req->input('id');
        $name=$req->input('name');
        $username=$req->input('username');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $update=CurdModel::where('id','=',$id)->update([
            'name'=>$name,
            'username'=>$username,
            'email'=>$email,
            'phone'=>$phone
        ]);
       

        if($update==true){
            return "Data Update Success";
        }else{
            return "Data Update Failed";
        }
}











    

















}
