<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

/**
 * @property Question[]|Collection questions
 * @property string                slug
 * @property string                title
 */
class Tag extends Model
{
    use HasSubscribers;

    /**
     * {@inheritdoc}
     */
    protected $fillable = ['title'];

    /**
     * {@inheritdoc}
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();

        self::creating(function (Tag $tag) {
            $tag->slug = str_slug($tag->title);
        });
    }

    public $subscribersTable = 'tag_subscriber';

    /**
     * @return BelongsToMany
     */
    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class);
    }

    public function getSolvedQuestionsAttribute()
    {
        $questions = $this->questions()->with('answers')->get();

        return $questions->filter->hasSolutions();
    }

    public function getSolutionAttribute()
    {
        $rate = ($this->solvedQuestions->count() * 100) / $this->questions->count();

        return floor($rate);
    }
}
