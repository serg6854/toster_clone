<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    /**
     * @return BelongsToMany
     */
    public function comments(): BelongsToMany
    {
        return $this->belongsToMany(Comment::class);
    }

    public function isSolution(): bool
    {
        return $this->is_solution;
    }

    public function markAsSolution(): void
    {
        $this->is_solution = true;
        $this->save();
    }
}
