<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Request\ContactRequest;

use App\Contact;



class ContactController extends Controller {
    
    public function home() {
        return view('home');
    }

    

    public function about() {
          return view('about');
    }


      public function review() {
            return view('review');
    }


    
       public function review_check(Request $req){
           $valid = $req->validate([
           'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
           ]);


           

           $review = new Contact();
            $review->email = $req->input('email');
               $review->subject = $req->input('subject');
                  $review->message = $req->input('message');
 
                  $review->save();

                

                  return redirect()->route('review');
                  

       }
    

       
 
}
