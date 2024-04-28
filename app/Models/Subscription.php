<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'session_count', 'access_to', 'price', 'start_date', 'end_date'
    ];
    
    // public function sport()
    // {
    //     return $this->belongsTo(Sport::class);
    // }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_subscriptions');
    }
}
