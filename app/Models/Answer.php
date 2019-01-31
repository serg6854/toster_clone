<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property bool is_solution
 */
class Answer extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $with = ['author'];

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'body',
        'is_solution',
        'question_id',
        'user_id',
    ];

    /**
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return BelongsTo
     */
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function isSolution(): bool
    {
        return $this->is_solution;
    }
}
