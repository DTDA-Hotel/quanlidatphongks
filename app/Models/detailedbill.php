<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailedBill extends Model
{
    protected $table = 'detailedbills';
    protected $fillable = [
        'id_bill',
        'id_room',
        'room_rate',
        'quantity',
    ];

    public function bill()
    {
        return $this->belongsTo(Bill::class, 'id_bill');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'id_room');
    }
}
