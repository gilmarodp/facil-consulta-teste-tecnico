<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'cpf', 'celular'];

    protected $appends = ['consulta'];

    public function consultas(): HasMany
    {
        return $this->hasMany(Consulta::class);
    }

    public function getConsultaAttribute()
    {
        $consulta = $this->consultas()
            ->where('data', '>=', now()->format('Y-m-d H:i:s'))
            ->first();

        if (!$consulta) {
            $consulta = $this->consultas()
                ->where('data', '<', now()->format('Y-m-d H:i:s'))
                ->orderBy('data', 'desc')
                ->first();
        }

        if (!$consulta) {
            $consulta = $this->consultas()->orderBy('data', 'desc')->first();
        }

        return $consulta;
    }
}
