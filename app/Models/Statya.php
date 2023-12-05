<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statya extends Model
{
    protected $fillable = ['title', 'lid', 'content', 'image', 'rubric_id'];

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }
}

