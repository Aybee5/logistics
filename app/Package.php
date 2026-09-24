<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

   
    public function shipment(){
        return $this->belongsTo(Shipment::class,'shipment_id','id');
    }
}
