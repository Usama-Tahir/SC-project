<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Medicine;
use App\User;

class AdminController extends Controller
{
    public function postSignIn(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        if($email == 'usamatahir101@gmail.com' && $password == 'moombati')
        {
            return redirect()->route('admin.dashboard');
        }
//        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
//        {
//            return redirect()->route('admin.dashboard');
//        }

        return redirect()->back();

    }

    public function getDashboard()
    {
       return view('dashboard');
    }

    public function getFullDatabase()
    {
        $records = DB::table('medicines')->get();
//        return view('full', ['medicines' => $records]);
        return view('full', compact('records'));
    }
    public function getUsers()
    {
        $records = DB::table('users')->get();
//        return view('full', ['medicines' => $records]);
        return view('users', compact('records'));
    }

    public function getOriginalDatabase()
    {
        $full = DB::select('select * from medicines where status = ?',['original']);

        return view('original', compact('full'));

    }

    public function userMedicines()
    {
        $full = DB::select('select * from medicines');

        return view('userDashboard', compact('full'));


    }


    public function getFakeDatabase()
    {
        $full = DB::select('select * from medicines where status = ?',['fake']);

        return view('fake', compact('full'));

    }

    public function deleteUser(Request $request)
    {
        $name = $request['search'];

        $full = DB::delete('delete  from users where name = ?',[$name]);
//        echo $full;
        if($full>0)
        {
            return view('temp');
        }
        else{
            return view('search');
        }
//

    }
    public function updateMedicine()
    {
        return view('searchM');

    }

    public function updated(Request $request)
    {
        $med = $request['search'];
        $value = $request['medd'];
        $updated =  DB::table('medicines')
            ->where('med_name', $med)
            ->update(['status' => $value]);
        $full = DB::select('select * from medicines where status = ?',[$value]);
//        echo count($full);
        if(count($full)>0)
        {
            return view('temp2');
        }
        else
        {
            return view('searchM');
        }


    }
}



