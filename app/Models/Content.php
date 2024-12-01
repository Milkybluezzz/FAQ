<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = 'contents';
    protected $fillable = [
        'gambar',
        'title',
        'deskripsi',
        'faq_id',
    ];
    public function faq()
    {
        return $this->belongsTo(Faq::class, 'faq_id', 'id');
    }
}
