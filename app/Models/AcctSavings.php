<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcctSavings extends Model
{
    // use HasFactory;
    protected $connection = 'mysql3';
    protected $table = 'acct_savings'; 
    protected $primaryKey = 'savings_id';
    protected $guarded = ['savings_id', 'created_at', 'updated_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
