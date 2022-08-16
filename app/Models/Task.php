<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $guarded = false;
    const IMPORTANT = 1;
    const NOT_IMPORTANT = 0;

    public function get_importance()
    {
        return [
            'IMPORTANT' => 'Срочно',
            'NOT_IMPORTANT' => 'Несрочно'
        ];
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

}
