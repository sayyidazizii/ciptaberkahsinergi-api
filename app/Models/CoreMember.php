<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoreMember extends Model
{
    // use HasFactory;
    protected $connection = 'mysql3';
    protected $table = 'core_member'; 
    protected $primaryKey = 'member_id';
    protected $guarded = ['member_id', 'created_at', 'updated_at'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
