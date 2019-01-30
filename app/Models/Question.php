<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    public const EASY = 1;

    public const MIDDLE = 2;

    public const HARD = 3;

    protected $with = ['author'];

    protected $withCount = ['subscribers', 'answers'];

    protected $fillable = [
        'user_id'
    ];

    /**
     * @return BelongsToMany
     */
    public function subscribers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'question_subscriber');
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

    public function subscribe()
    {
        $userId = auth()->user()->id;

        $this->isSubscribed()
            ? $this->subscribers()->detach($userId)
            : $this->subscribers()->attach($userId);
    }

    public function isSubscribed($user = null)
    {
        if (!auth()->check()) {
            return false;
        }

        $user = $user ?? auth()->user();

        return $this->subscribers->contains($user->id);
    }
}
