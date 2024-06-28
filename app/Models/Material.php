<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materials';

    protected $fillable = [
        'item_number',
        'part_number',
        'product_name',
        'panjang',
        'lebar',
        'tinggi',
        'jr',
        'volume',
        'qty_box',
        'qty_pack',
        'qty_berat',
    ];
}
