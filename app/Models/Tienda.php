<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'quantity', 
        'productId',
        'users_id',
    ];

    public function dueño()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function Gabinete()
    {
        return $this->belongsTo(Gabinete::class, 'gabinetes_id','idGabinetes');
    }

}

