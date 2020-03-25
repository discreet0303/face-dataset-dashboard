<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'account',
        'password',
        'email',
        'username',
        'primary_role',
        'is_activated'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    protected $appends = [
        'role_translation',
    ];
    
    public function getRoleTranslationAttribute() {
        $roleEnToCh = [
            'super-admin' => '最高管理者',
            'admin' => '管理者',
            'user' => '使用者'
        ];
        return $roleEnToCh[$this->primary_role];
    }
}
