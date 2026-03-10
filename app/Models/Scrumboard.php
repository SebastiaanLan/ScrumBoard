<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scrumboard extends Model
{
    protected $fillable = ['name', 'slug', 'description'];
    
    /** @use HasFactory<\Database\Factories\ScumboardFactory> */
    use HasFactory;

    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
