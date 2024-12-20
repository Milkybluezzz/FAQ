<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faqs';
    protected $fillable = [
        'judul',
        'deskripsi',
        'qna_id'
        ];

    public function qna()
    {
        return $this->hasMany(Qna::class);
    }
    
    
}
