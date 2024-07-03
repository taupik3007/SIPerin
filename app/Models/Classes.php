<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $primaryKey = 'cls_id';

    protected $guarded = [
        
    ];

    public function cls_major(): BelongsTo
    {
        return $this->BelongsTo(Major::class,'cls_major_id');
    }

}
