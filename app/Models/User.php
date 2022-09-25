<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Sujet;



class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastename',
        'firstname',
        'email',
        'password',
        'passwordcomfirm',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function sujets()
    {
        return $this->hasMany(Sujet::class);
    }

}
