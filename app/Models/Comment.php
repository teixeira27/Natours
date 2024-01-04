<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'spot_id', 'comment', 'rating'];
    protected $table = 'comments';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function spot()
    {
        return $this->belongsTo(Spot::class);
    }
    public function userName()
    {
        return $this->user->name;
    }
}
