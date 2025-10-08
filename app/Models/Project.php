<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function workTimes()
    {
        return $this->hasMany(WorkTime::class, 'project_id');
    }
}
