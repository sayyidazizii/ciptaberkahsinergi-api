<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcctSavingsAccount extends Model
{
    // use HasFactory;
    protected $connection   = 'mysql3';
    protected $table        = 'acct_savings_account'; 
    protected $primaryKey   = 'savings_account_id';
    protected $guarded      = 
        [
            'savings_account_id', 
            'savings_account_no', 
            'savings_id', 
            'savings_name', 
            'savings_account_last_balance', 
            'updated_at'
        ];
    const CREATED_AT        = 'created_at';
    const UPDATED_AT        = 'updated_at';
}
