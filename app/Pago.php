<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        'idPago',
        'buyOrder',
        'idAlumno',
        'amount',
        'cardNumber',
        'transactionDate',
        'commerceCode',
    ];

    public $timestamps = false;

    protected $table = 'pago';
}
