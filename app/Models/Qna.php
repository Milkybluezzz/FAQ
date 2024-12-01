<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qna extends Model
{
    use HasFactory;

    protected $table = 'qna';

    protected $fillable = [
        'pertanyaan',
        'jawaban',
        'faq_id',
    ];

    public function faq()
    {
        return $this->belongsTo(Faq::class, 'faq_id');
    }
}
