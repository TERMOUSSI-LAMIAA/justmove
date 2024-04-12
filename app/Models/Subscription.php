<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'session_count', 'access_to', 'price', 'start_date', 'end_date'
    ];
    
    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    public function users()
    {
        //return $this->belongsToMany(User::class, 'user_subscriptions')->withTimestamps();
        return $this->belongsToMany(User::class, 'user_subscriptions');
    }
}
