<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'priority', 'description', 'scrumboard_id'];

    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    public function scrumboard() {
        return $this->belongsTo(Scrumboard::class);
    }
}
