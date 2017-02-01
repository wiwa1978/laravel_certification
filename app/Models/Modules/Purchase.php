<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['user_id', 'product_id', 'stripe_transaction_id' ];
 
    public function user()
    {
        return $this->hasOne('App\Models\Access\User\User');
    }
 
    public function product()
    {
        return $this->hasOne('App\Models\Modules\Product');
    }

}
