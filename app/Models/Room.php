<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ["name","category_id","description"];
    public function Room() {
        return $this->hasMany(khoanh::class);
    }
}
