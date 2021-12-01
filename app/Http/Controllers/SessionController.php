<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function testSession(Request $request){
    	
    	$request->session()->regenerate();	
    	$request->session()->put('name',['Randy']);
    	$request->session()->push('name','Randy1');



    	$name = $request->session()->get('name');

    	dd($name);

    	/*
    	$a = '';
		isset( $a ); //true
		empty( $a ); //true có giá trị => false
		$b = null;
		isset( $b ); // false
		empty( $b ); //true
    	*/

    	
    }
}
