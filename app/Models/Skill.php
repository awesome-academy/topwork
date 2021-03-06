<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'category_id',
    ];

    public function skillCategory()
    {
        return $this->belongsTo('\App\Models\Category', 'category_id', 'id');
    }

    public function skillJobs()
    {
        return $this->hasMany('\App\Models\JobSkill', 'skill_id', 'id');
    }
}
