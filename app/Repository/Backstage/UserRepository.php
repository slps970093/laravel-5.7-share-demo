<?php
/**
 * Created by PhpStorm.
 * User: Yu-Hsien Chou
 * Date: 2019/2/28
 * Time: 上午 02:11
 */

namespace App\Repository\Backstage;


use App\Model\Backstage\User;
use Illuminate\Support\Facades\Hash;

class UserRepository
{

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getData () {
        return $this->user->all();
    }

    public function append ( $data ){
        $count = self::getUsernameCount($data['username']);
        if ( $count != 0) {
            throw new \Exception('帳號已經存在');
        }
        $data['password'] = Hash::make($data['password']);
        $this->user->create( $data );
    }

    private function getUsernameCount( $username ){
        return $this->user->where('username' , $username)->count();
    }

    public function find( $primaryKey ) {
        return $this->user->find( $primaryKey );
    }

    public function update ( $data , $primaryKey , $changePassword = false ) {
        $count = self::getUsernameCount($data['username']);
        if ( $count != 0 ) {
            $userData = $this->user->where('username' , $data['username'] )->first();
            if ( $primaryKey != $userData['id'] ){
                throw new \Exception('帳戶已存在');
            }
        }
        if ( $changePassword ) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
        $res = $this->user->find( $primaryKey );
        foreach ( $data as $key => $value ){
            $res->{ $key } = $value;
        }
        $res->save();
    }

    public function remove ( $primaryKey ) {
        $res = $this->user->find($primaryKey);
        $res->delete();
    }
}
