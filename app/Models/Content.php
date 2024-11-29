<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Content extends Model
{
    protected $table = 'contents';
    
    use HasFactory;

    protected $fillable = ['gambar', 'title', 'deskripsi'];

    public function faq_id()
    {
        return $this->belongsTo(faq::class, 'faq_id', 'id');
    }
}
