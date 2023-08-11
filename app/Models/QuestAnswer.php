<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\App;

class QuestAnswer extends Model
{
    use HasFactory;
    use Translatable;

    protected $table = 'quest_answers';

    public $translatedAttributes  = [
        'question',
        'answer',
    ];

    protected $with =['translation'];

}
