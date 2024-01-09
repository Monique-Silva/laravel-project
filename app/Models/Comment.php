<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Post;

$comments = Message::find(1)->comments;

foreach ($comments as $comment) {
    echo $comment->comment;
}

class Comment extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'comments';


    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class);
    }
}
