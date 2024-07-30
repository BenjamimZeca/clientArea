<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControladorInvoice extends Model
{
    use HasFactory;

    protected $fillable = ['invoice_number', 'year', 'sequence_number'];

    public static function generateInvoiceNumber()
    {
        $year = date('Y');
        $prefix = '/' . $year;

        // Obtém o número sequencial mais alto para o ano atual
        $lastInvoice = self::where('year', $year)
                           ->orderBy('sequence_number', 'desc')
                           ->first();

        // Define o próximo número sequencial
        $sequenceNumber = $lastInvoice ? $lastInvoice->sequence_number + 1 : 1;

        // Formata o número sequencial com zeros à esquerda
        $sequenceNumberFormatted = str_pad($sequenceNumber, 4, '0', STR_PAD_LEFT);

        return $sequenceNumberFormatted . $prefix;
    }


}
