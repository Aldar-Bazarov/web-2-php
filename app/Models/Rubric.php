<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    protected $fillable = ['rubric_name'];

    public function statyas()
    {
        return $this->hasMany(Statya::class);
    }
}
