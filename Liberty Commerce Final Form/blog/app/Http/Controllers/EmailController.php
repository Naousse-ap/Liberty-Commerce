<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function mail(Request $request) {
        request()->validate([
            'email' =>['required', 'email'],
        ]);
        $mail = ($request->get('email'));
        $user = DB::table('users')->where('email', $mail)->first();
        if ($user == null) {
            return redirect("register");
        } else {
            $mdp = (bin2hex(random_bytes(5)));
            \App\Models\User::where('email', $mail)->update(['password' => bcrypt($mdp)]);
            $details = [
                'mdp' => $mdp,
                'email'=> $mail,
                'name' => $user->nom_prénom,
            ];
            Mail::to($mail)->send(new \App\Mail\resetmail($details));
            return redirect("login");
        }
    }
    public function reset() {
        return view("auth/passwords/email");
    }
}
