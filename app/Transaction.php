<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
       'travel_packages_id','user_id','additional_visa',
       'transaction_total','transaction_status'
    ];

    protected $hidden = [
        
    ];

    // relasi

    public function details(){
        return $this->hasMany(TransactionDetail::class, 'transactions_id','id');
    }

    public function travel_package(){
        return $this->belongsTo(TravelPackage::class, 'trave_packages_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'users _id','id');
    }
}

