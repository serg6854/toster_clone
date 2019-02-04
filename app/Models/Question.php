<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{
    Model,
    Relations\BelongsTo,
    Relations\BelongsToMany,
    Relations\HasMany
};
use Illuminate\Support\Collection;

/**
 * @property string              body
 * @property integer             complexity
 * @property User[]|Collection   subscribers
 * @property Answer[]|Collection answers
 * @property Answer[]|Collection solutions
 */
class Question extends Model
{
    use HasSubscribers;

    public const EASY = 1;

    public const MIDDLE = 2;

    public const HARD = 3;

    /**
     * {@inheritdoc}
     */
    protected $with = ['author', 'solutions', 'answers'];

    /**
     * {@inheritdoc}
     */
    protected $withCount = ['subscribers', 'answers'];

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'user_id'
    ];

    public $subscribersTable = 'question_subscriber';

    /**
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return HasMany
     */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * @return HasMany
     */
    public function solutions(): HasMany
    {
        return $this->hasMany(Answer::class)
            ->where('is_solution', true);
    }

    /**
     * @return bool
     */
    public function hasSolutions(): bool
    {
        return $this->solutions->isNotEmpty();
    }
}
