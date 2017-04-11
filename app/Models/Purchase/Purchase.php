<?php

namespace App\Models\Purchase;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['user_id', 'certification_id', 'stripe_transaction_id' ];
 
    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User');
    }
 
    public function certification()
    {
        return $this->belongsTo('App\Models\Certification\Certification');
    }

    public function scopeCurrentUser($query)
    {
        return $query->where('user_id', access()->user()->id);
    }

}
