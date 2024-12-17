<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    use HasFactory;

    protected $table = 'buses';

    public function festival(): BelongsTo
    {
        return $this->belongsTo(Festival::class);
    }
}
