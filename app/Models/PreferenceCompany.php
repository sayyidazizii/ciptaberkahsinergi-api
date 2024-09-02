<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreferenceCompany extends Model
{
    // use HasFactory;
    protected $connection = 'mysql3';
    protected $table = 'preference_company'; 
    protected $primaryKey = 'company_id';
    protected $guarded = ['company_id', 'created_at', 'updated_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
