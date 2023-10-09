<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function getPaginateByLimit(int $limited_count = 5) {
        return $this->orderBy('updated_at', 'DESC')->paginate($limited_count);
    }
    
    protected $fillable = [
        'title',
        'body',
    ];
}
