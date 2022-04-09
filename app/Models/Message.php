<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'likes',
        'replies',
        'views',
    ];

    /**
     * Get the user of the message.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
