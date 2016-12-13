<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Mail\SendEmailController;

class EmailController extends Controller
{
    //
	
	
	

    //
	function index(){
	
     return view('list');
	
	
	}
	
	public function sendEmail(Request $request){


       $this->validate($request,
            [
                'fname' => 'required|max:10',
				'lname' => 'required|max:10',
                'postal'=> array(
                'required',
                'max:6',
                
                'regex:/\b\d{5}\b/'
            ),
                'pnum' => 'required',
				
                'email' => array(
                'required',
                'max:50',
                'email',
                'regex:/(\.com(\.[a-z]+)?|\.ac\.[a-z]+)$/'
            ),
				
				
            ]
            );

       // dd($request->all());
       // Cd::create($request->all());

       // $inproduct =  new product;
       // $inproduct->product = $request->product;
       // $inproduct->info =$request->info;
	       $user = $request->email;
	       $fname = $request->fname;
		   $lname = $request->lname;
		   //$productId = $request->product;
		  // $id = product::find($productId);
        

       // $inproduct->save();
	   
	
 
        // Mail::to($user)->send(new test($id->info));
		Mail::to($user)->send(new SendEmailController($fname,$lname));
		
		
         

}
	
	
	
	
}
