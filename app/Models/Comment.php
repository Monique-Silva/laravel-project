<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Message;

class Comment extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'comments',
        'message_id',
    ];


    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class);
    }
}
