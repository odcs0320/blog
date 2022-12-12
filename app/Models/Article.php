<?php

namespace App\Models;

use App\Models\Cgy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $dates = ['enable_at'];
    protected $fillable = ['user_id', 'content', 'pic']; //白名單

    public function cgy()
    {
        return $this->belongsTo(Cgy::class);
    }
}