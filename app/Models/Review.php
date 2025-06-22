<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
        public function Review()  {
        return $this->belongsTo(Room::class);
    }
}
