<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medico extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'especialidade', 'cidade_id'];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(Cidade::class);
    }
}
