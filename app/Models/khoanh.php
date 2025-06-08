<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class khoanh extends Model
{
    public function khoanh()  {
        return $this->belongsTo(Room::class);
    }
}
