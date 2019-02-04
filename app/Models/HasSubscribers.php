<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasSubscribers
{
    /**
     * @return BelongsToMany
     */
    public function subscribers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, $this->subscribersTable);
    }

    /**
     * @param null $user
     *
     * @return bool
     */
    public function isSubscribed($user = null): bool
    {
        if (auth()->guest()) {
            return false;
        }

        $user = $user ?? auth()->user();

        return $this->subscribers->contains($user->id);
    }

    public function subscribe(): void
    {
        $userId = auth()->id();

        $this->isSubscribed()
            ? $this->subscribers()->detach($userId)
            : $this->subscribers()->attach($userId);
    }
}
