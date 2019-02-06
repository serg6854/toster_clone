<?php

namespace App\Models;

use App\Providers\CreatedQuestionEvent;
use Illuminate\Database\Eloquent\{
    Builder,
    Model,
    Relations\BelongsTo,
    Relations\BelongsToMany,
    Relations\HasMany};
use Illuminate\Support\Collection;

/**
 * @property string               body
 * @property integer              complexity
 * @property User[]|Collection    subscribers
 * @property Answer[]|Collection  answers
 * @property Answer[]|Collection  solutions
 * @property Comment[]|Collection comments
 * @property User                 author
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
        'title',
        'body',
        'user_id'
    ];

    public $subscribersTable = 'question_subscriber';

    protected static function boot()
    {
        parent::boot();

        self::creating(function (Question $question) {
            $question->author()->associate(auth()->user());
        });
        self::created(function (Question $question) {
            event(new CreatedQuestionEvent($question));
        });
    }

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

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * @return BelongsToMany
     */
    public function comments(): BelongsToMany
    {
        return $this->belongsToMany(Comment::class);
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

    /**
     * @param User $user
     *
     * @return bool
     */
    public function isAuthor(User $user)
    {
        return $this->author->is($user);
    }

    /**
     * Scope a query to fetch similar questions
     *
     * @param Builder $query
     * @param self    $question
     *
     * @return Builder
     */
    public function scopeSimilar(Builder $query, Question $question)
    {
        return $query
            ->whereHas('tags', function ($query) use ($question) {
                $query->whereIn('title', $question->tags->pluck('title'));
            })
            ->where('id', '!=', $question->id)
        ;
    }
}
