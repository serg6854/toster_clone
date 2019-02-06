<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property string first_name
 * @property string last_name
 * @property string nickname
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'nickname',
        'email',
        'password',
    ];

    /**
     * {@inheritdoc}
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * {@inheritdoc}
     */
    protected $withCount = ['answers'];

    public function __toString()
    {
        if (isset($this->first_name) || isset($this->last_name)) {
            return implode(' ', [$this->first_name, $this->last_name]);
        }

        return $this->nickname;
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteKeyName(): string
    {
        return 'nickname';
    }

    /**
     * @return BelongsToMany
     */
    public function questionsSubscriptions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'question_subscriber');
    }

    /**
     * @return BelongsToMany
     */
    public function tagSubscriptions(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'tag_subscriber');
    }

    /**
     * @return HasMany
     */
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    /**
     * @return HasMany
     */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }
}
