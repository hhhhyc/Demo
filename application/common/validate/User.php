<?php
namespace app\common\validate;

use think\Validate;

class User extends Validate{
    protected $rule=[
        'username'=>'require',
        'email'=>'email',
        'password'=>'confirm:repassword',
        'verifycode'=>'require'
        ];

    //场景设置
    protected $scene=[
        'add'=>['username','email','password','repassword','verifycode']
    ];
}