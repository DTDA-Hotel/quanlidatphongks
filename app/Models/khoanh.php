<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class khoanh extends Model
{
        use SoftDeletes;
    protected $fillable =["imgname",'roomid'];
    public function khoanh()  {
        return $this->belongsTo(Room::class);
    }
}
