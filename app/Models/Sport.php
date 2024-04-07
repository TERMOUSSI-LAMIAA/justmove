<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;
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
}
