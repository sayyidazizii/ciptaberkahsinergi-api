<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcctSavingsTransferMutationFrom extends Model
{
    // use HasFactory;
    protected $connection = 'mysql3';
    protected $table = 'acct_savings_transfer_mutation_from'; 
    protected $primaryKey = 'savings_transfer_mutation_from_id';
    protected $guarded = ['savings_transfer_mutation_from_id', 'created_at', 'updated_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
