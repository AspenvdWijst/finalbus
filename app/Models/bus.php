<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class bus extends Model
{
    use HasFactory;

    protected $table = 'buses';

    public function festival(): BelongsTo
    {
        return $this->belongsTo(Festival::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

}
