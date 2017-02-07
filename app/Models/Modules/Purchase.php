<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['user_id', 'product_id', 'stripe_transaction_id' ];
 
    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User');
    }
 
    public function product()
    {
        return $this->belongsTo('App\Models\Modules\Product');
    }

    public function scopeCurrentUser($query)
    {
        return $query->where('user_id', access()->user()->id);
    }

}
