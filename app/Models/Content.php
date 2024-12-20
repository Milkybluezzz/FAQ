<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = 'konten';
    protected $fillable = [
        'gambar',
        'title',
        'deskripsi',
        'faq_id',
    ];
    public function faq()
    {
        return $this->hasOne(Faq::class, 'konten_id');
    }
    public function qna()
{
    return $this->hasManyThrough(Qna::class, Faq::class, 'konten_id', 'faq_id', 'id', 'id');
}
}

