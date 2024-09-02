<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreferenceTransactionModule extends Model
{
    // use HasFactory;
    protected $connection = 'mysql3';
    protected $table = 'preference_transaction_module'; 
    protected $primaryKey = 'transaction_module_id';
    protected $guarded = ['transaction_module_id', 'created_at', 'updated_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
