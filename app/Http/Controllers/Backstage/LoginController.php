<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
       $this->middleware('backstage.auth',[
           'except' => ['logout']
       ]);
    }

    public function index ( Request $request ) {
        $messageFlog = ( !empty($request->get('flog')) ) ? intval($request->get('flog')) : null;
        return view('backstage.login.index', [
            'messageFlog' => $messageFlog
        ]);
    }

    public function login ( Request $request ) {
        if ( Auth::guard('backstage')->attempt($request->only(['username','password']) ) ) {
            return redirect()->to('backstage/user');
        }
        return redirect()->to('admin/login?flog=1');
    }

    public function logout() {
        Auth::guard('backstage')->logout();
        return redirect()->to('admin/login');
    }
}
