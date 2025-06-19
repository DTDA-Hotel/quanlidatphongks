<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ["name", "category_id", "description", "amenities", "position", "pimage"];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
