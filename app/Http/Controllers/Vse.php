<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nahid\Talk\Live\Broadcast;
use Carbon\Carbon;

class Vse extends Controller
{

    public function lab(){
        return view('/lab', ['users' => User::orderby('name')->get()]);
    }
    public function Poisklab(Request $request){
        $namees = $request->nam;
        $users = DB::table('users')->where('name', 'like', "%$namees%")->get();
        return view('/lab', compact('users'));
    }
    public function labba(){
        return view('/laba', ['shops' => Shop::orderby('name')->get()]);
    }
    public function searchlaba(Request $request){
        $namees = $request->nam;
        $shops = DB::table('shops')->where('name', 'like', "%$namees%")->get();
        return view('/laba', compact('shops'));
    }
    public function adduser(Request $request){
        $users = new User();
        $test = DB::select('select email from users where name = ?', [$request->namee]);
        if ($test != null){
            return view('/labuseraad');
        }
        $te = DB::select('select name from users where email = ?', [$request->emaill]);
        if ($te != null){
            return view('/labuseraad');
        }
        $users->name = $request->namee;
        $users->email = $request->emaill;
        $users->save();
        return view('/labuseraad');
    }
    public function hasmanylab(){
        $user = User::find(31);
        $users = $user->zakazus;
        return view('/hasmane', compact('users'));
    }

    public function belongtomanelab(){
        $user = User::find(31);
        $users = $user->shops;
        return view('/belongtomany', compact('users'));
    }
}

