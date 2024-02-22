<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    use HasFactory;
    protected $fillable = [
        'livre_id',
        'user_id',
        'date_emprunt',
        'date_retour',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function livre()
    {
        return $this->belongsTo(Livre::class);
    }
}









