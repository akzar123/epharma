<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\admin;

class adminController extends Controller
{
    public function adminLogin(Request $req)
    {
    	$un = $req->input('text1');
    	$pw = $req->input('password');
    	$adminx = admin::where('username','=',$un)
    					->where('password','=',$pw)
    					->get();
    	if(count($adminx)>0)
    	{
    		$uname = admin::where('username','=',$un)
    					->where('password','=',$pw)
    					->value('username');
    		session()->put('username', $uname);			
	    	return redirect('/adminPage');	
    	}
    	else
    	{
    		echo "
	    	<script>
	    	alert('user doesn't exist);
	    	window.location='/loginPage';
	   		</script>
	    	";
    	}
    }

    public function alogout()
    {
    	session()->forget('username');
    	session()->flush();
    	return redirect('/loginPage');
    }
}
