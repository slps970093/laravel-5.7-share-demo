<?php

namespace App\Http\Controllers\Backstage;

use App\Repository\Backstage\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //

    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index() {
        $res = $this->userRepository->getData();
        return view('backstage.account.index',[
            'result' => $res
        ]);
    }

    public function create () {
        return view('backstage.account.create');
    }

    public function append( Request $request) {
        $this->userRepository->append( array(
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'name' => $request->name
        ));
        return redirect()->to('backstage/user?flog=1');
    }

    public function update ( $primaryKey ) {
        $res = $this->userRepository->find($primaryKey);
        return view('backstage.account.update' , [
            'result' => $res
        ]);
    }

    public function modify ( $primaryKey , Request $request) {
        $data = array(
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'name' => $request->name
        );
        $enable = ( empty($request->enable) ) ? 0 : 1;
        $change = ($enable == 1) ? true : false;
        $this->userRepository->update($data,$primaryKey ,$change);
        return redirect()->to('backstage/user?flog=1');
    }


    public function remove( $primaryKey ) {
        $this->userRepository->remove($primaryKey);
        return response()->json(['status' => true]);
    }
}
