<?php

namespace App\Models;

use App\Models\{User, Category};
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'due_date' , 'description', 'is_done', 'user_id', 'category_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public static function getAllTasks() {
        return self::with('category')->get();
    }
}
