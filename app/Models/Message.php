<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
     * Add a human-readable date string.
     *
     * @return Attribute
     */
    protected function dateString(): Attribute
    {
        return new Attribute(
            // "Tuesday the 1st of December 2020 at 10:20:00 AM"
            get: fn () => $this->updated_at->format('l \\t\\h\\e jS \\of F Y \\a\\t h:i:s A'),
        );
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['date_string'];

    /**
     * Get the user of the message.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the author of the message.
     */
    public function author()
    {
        return $this->belongsTo(TeamMember::class);
    }


}
