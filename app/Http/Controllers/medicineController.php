<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\medicine;

class medicineController extends Controller
{
    public function addEntry(Request $req)
    {
    	$med = new medicine();
    	$med->name = $req->input('name');
    	$med->dosage = $req->input('dosage');
    	$med->expiry = $req->input('expiry');
    	$med->desc = $req->input('desc');
    	$med->effects = $req->input('effects');
        if($req->has('image'))
        {
            $img = $req->file('image');
            $filename = rand().'.'.$img->getClientOriginalExtension();
            $img->move("uploads/images/", $filename);
            $med->image = $filename;
        }
    	if($med->save())
    	{
    		echo "
    		<script>
    		alert('Inserted');
    		window.location='/add';
    		</script>
    		";
    	}
    	else
    	{
    		echo "
    		<script>
    		alert('Error');
    		window.location='/add';
    		</script>
    		";
    	}
    }
    public function edit($id)
    {
        if(session('username'))
        {
            $res = medicine::where('id','=',$id)->get();
            return view('Admin/editPage',compact('res'));
        }
        else
        {
            return redirect('/loginPage');
        }
    }
    public function editqry(Request $req)
    {
        if(session('username'))
        {
            $n = $req->input('name');
            $d = $req->input('dosage');
            $e = $req->input('expiry');
            $ds = $req->input('desc');
            $ef = $req->input('effects');
            $id = $req->input('id');
            $med = $req->input('_im');
            if($req->has('image'))
            {
                $x = medicine::findOrFail($id);
                unlink(public_path().'/uploads/images/'.$x->image);
                $img = $req->file('image');
                $filename = rand().'.'.$img->getClientOriginalExtension();
                $img->move("uploads/images/", $filename);
                $med = $filename;
            }
            $update = medicine::where('id','=',$id)->
                update(['name'=>$n,'dosage'=>$d,'expiry'=>$e,'desc'=>$ds,'effects'=>$ef, 'image'=>$med]);
            if($update == true)
            {
                echo"
                <script>
                alert('Updated');
                window.location='/viewMed';
                </script>
                ";
            }
            else
            {
                echo"
                <script>
                alert('Error');
                window.location='/viewMed';
                </script>
                ";
            }
        }
        else
        {
            return redirect('/loginPage');
        }
        
    }
    public function delete($id)
    {
        if(session('username'))
        {
            $x = medicine::findOrFail($id);
            if ($x->image!=null) {
                unlink(public_path().'/uploads/images/'.$x->image);
            }
            $delete = medicine::where('id','=',$id)->delete();
            if($delete == true)
            {
                echo"
                <script>
                alert('Deleted successfully');
                window.location='/viewMed';
                </script>
                ";
            }
            else
            {
                echo"
                <script>
                alert('Error');
                window.location='/viewMed';
                </script>
                ";
            }
        }
        else
        {
            return redirect('/loginPage');
        }
        
    }
}
