<?php

namespace App\Models;

use App\Models\Generation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Curriculum extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function generations()
    {
        return $this->hasMany(Generation::class);
    }
}
