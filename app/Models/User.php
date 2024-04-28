<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    public function subscriptions()
    {
        return $this->belongsToMany(Subscription::class, 'user_subscriptions');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($user) {
            $user->sessions()->delete();
            $user->reservations()->delete();
        });
    }

    public function isAdmin()
    {
        return $this->type_user === "admin";
    }
    public function isUser()
    {
        return $this->type_user === "user";
    }
    public function isMember()
    {
        return $this->type_user === "member";
    }
}
