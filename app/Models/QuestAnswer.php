<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestAnswer extends Model
{
    use HasFactory;

    protected $table = 'quest_answer';
    protected $fillable = [
        'question',
        'answer'
    ];
}
