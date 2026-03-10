<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'priority', 'description', 'status', 'scrumboard_id'];
    protected $statuses = ['backlog', 'todo', 'doing', 'done'];

    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    public function scrumboard() {
        return $this->belongsTo(Scrumboard::class);
    }

    public function nextStatus(): ?string {
        $index = array_search($this->status, $this->statuses);
        return $this->statuses[$index + 1] ?? null;
    }

    public function prevStatus(): ?string {
        $index = array_search($this->status, $this->statuses);
        return $this->statuses[$index - 1] ?? null;
    }

    public function priorityColor(): string {
        return match ($this->priority) {
            3 => 'bg-green-600',
            2 => 'bg-blue-600',
            1 => 'bg-red-600',
            default => 'bg-black',
        };
}
}
