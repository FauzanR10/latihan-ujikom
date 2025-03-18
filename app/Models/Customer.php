<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_customer';
    public $incrementing = false; // Jika tidak auto-increment
    protected $keyType = 'string'; // Jika tipe datanya string
    protected $fillable = ['nama_customer', 'email', 'alamat', 'telp'];
}
