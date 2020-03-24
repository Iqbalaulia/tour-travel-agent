<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;

    
    protected $table = 'transactions_details';
    
    protected $hidden = [
        
    ];

    // relasi

    public function transaction(){
        return $this->belongsTo(Transaction::class,'transactions_id','id');
    }
    

}
