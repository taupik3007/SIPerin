<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorpProfile extends Model
{
    use HasFactory;
    protected $primaryKey = 'crpp_id';
    protected $guarded = [
        
    ];
}
