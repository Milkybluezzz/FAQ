<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    // Metode untuk relasi ke model Faq
    public function Faq()
    {
        return $this->hasMany(Faq::class, 'application_id');
    }
}