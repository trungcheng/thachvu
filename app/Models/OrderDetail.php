<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';

    protected $fillable = [
        'order_id', 
        'pro_id',
        'quantity',
        'amount'
    ];

    public function product() {
    	return $this->belongsTo('App\Models\Product', 'pro_id', 'id');
    }

    public function order() {
    	return $this->belongsTo('App\Models\Order', 'order_id', 'id');
    }

}
