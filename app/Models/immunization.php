<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class immunization extends Model
{
    use HasFactory;
    const CREATED_AT = 'date_first_seen';
}
