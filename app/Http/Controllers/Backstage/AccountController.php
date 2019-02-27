<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    //

    public function index() {
        return view('backstage.account.index');
    }

    public function create () {

    }

    public function append() {

    }

    public function update ( $primaryKey ) {

    }

    public function modify ( $primaryKey , Request $request) {

    }
}
