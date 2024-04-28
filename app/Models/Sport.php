<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Sport extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'sport';

    protected $fillable = [
        'title',
        'description',
        'img',
        'category_id',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function userSubscriptions()
    {
        return $this->belongsToMany(User::class, 'user_subscriptions');
    }

  
}
