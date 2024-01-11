<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Message;


//vai criar as relações entre os modelos (oneToMany etc) e dar instruções específicas à leitura (direito de deletar, mudar etc))
class Comment extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [ //diz o que tem direito de ser mudado
        'comments',
        'message_id',
    ];


    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class);
    }
}
