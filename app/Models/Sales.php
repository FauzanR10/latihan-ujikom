<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'tanggal_transaksi', 'total_harga'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
