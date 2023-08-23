<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'paginas',
        'valor',
        'id_author'
    ];

   public function author() {
        return $this->belongsTo(Author::class, 'id_author');
   }
}
