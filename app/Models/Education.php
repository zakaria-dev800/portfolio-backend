<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Education extends Model
{
    use  HasFactory, Notifiable;

    protected $table = 'educations';

    protected $fillable = [
        'school_name',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}