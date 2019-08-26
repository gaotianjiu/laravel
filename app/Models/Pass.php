<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pass extends Authenticatable
{
    //声明表
    protected $table = "user_login_pass";

    //指定主键
    protected $primaryKey= 'uid';

    //关闭laravel自带更新created_at,updated_at,deleted_at的操作
    //protected $timestamps= false;

    //录入字段名
    protected $fillable= ['user_name','password','email','mobile','safelevel','state'];


    protected $hidden = ['password'];


}
