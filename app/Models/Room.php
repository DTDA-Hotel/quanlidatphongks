<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ["name", "category_id", "description", "amenities", "hotel_id","base_price", "pimage","old_img"];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
