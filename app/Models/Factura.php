<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'factura_n',
        'descricao',
        'data_emissao',
        'data_vencimento',
        'user_id',
        'total',
        'status_id',
    ];

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function status()
    {
        return $this->hasOne('App\Models\Status', 'id', 'status_id');
    }
}
