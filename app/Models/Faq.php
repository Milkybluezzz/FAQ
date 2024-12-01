<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faq';
    protected $fillable = [
        'judul',
        'deskripsi',
        'pertanyaan',
        'jawaban',
        'content_id',
        ];

    public function content()
    {
        return $this->hasMany(Content::class, 'id_faq', 'id');
    }
    
    
}
