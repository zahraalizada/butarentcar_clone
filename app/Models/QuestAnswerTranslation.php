<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestAnswerTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'question',
        'answer'
    ];
}
