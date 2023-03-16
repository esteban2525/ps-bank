<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'movement_type',
        'transfer_type',
        'origin_id',
        'destination_id'
    ];

    public function origin() 
    {
      return $this->belongsTo(Account::class,'origin_id');
    }

    public function destination() 
    {
      return $this->belongsTo(Account::class,'destination_id');
    }

}
