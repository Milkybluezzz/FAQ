<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faq';
    
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'pertanyaan', 'jawaban'];

    public function application()
    {
        return $this->belongsTo(Application::class, 'application_id');
        
    }
}
