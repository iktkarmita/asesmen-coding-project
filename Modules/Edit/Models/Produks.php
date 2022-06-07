<?php

namespace Modules\Edit\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produks extends Model
{
    use HasFactory;

   protected $table = "produks";
   protected $primaryKey = "id";
   protected $fillable = [
        'id', 'nama', 'keterangan',  'image', 'harga', 'persediaan'
    ];
}
