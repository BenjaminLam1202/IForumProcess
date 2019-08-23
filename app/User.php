<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected static function boot()
    {
      parent::boot();

      static::created(function ($user){
        $user->profile()->create([
          'title' => $user->username,
        ]);
      });
    }

    public function posts()
    {
      return $this->hasMany(Post::class)->orderby('created_at','DESC');
    }

    public function profile()
    {
      return $this->hasOne(Profile::class);
    }

}