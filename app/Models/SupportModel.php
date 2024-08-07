<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportModel extends Model
{
    use HasFactory;
    protected $table="customer_support";
    protected $fillable=[
        'name',
        'slug',
        'title',
        'content',
    ];
}
