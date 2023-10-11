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
    public static function createNewTask($result) {
        $done = $result->done ? 1 : 0;
        return self::create([
            'title' => $result->title,
            'due_date' => $result->date,
            'description' => $result->description,
            'is_done' => $done,
            'user_id' => 1,
            'category_id' => $result->category,
        ]);
    }

    public static function findOneTask($id) {
        return self::with('category')->where('id', $id)->first();
    }

    public static function updateTask($result) {
        $done = $result->done ? 1 : 0;
        return self::where('id', $result->id)
        ->update([
            'title' => $result->title,
            'due_date' => $result->date,
            'description' => $result->description,
            'is_done' => $done,
            'user_id' => 1,
            'category_id' => $result->category,
        ]);
    }
    public static function deleteTask($id) {
        return self::where('id', $id)->delete();
    }
}
