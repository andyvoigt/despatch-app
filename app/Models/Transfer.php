<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'company',
        'reference',
        'equipment_type',
        'transfer_type',
        'quantity',
        'docket',
        'comments',
    ];
}
