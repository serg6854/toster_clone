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
     * @param User|null $user
     *
     * @return bool
     */
    public function isSubscribed(User $user = null): bool
    {
        if (auth()->guest()) {
            return false;
        }

        $userId = $user->id ?? auth()->id();

        return $this->subscribers->contains($userId);
    }

    public function subscribe(): void
    {
        $userId = auth()->id();

        $this->isSubscribed()
            ? $this->subscribers()->detach($userId)
            : $this->subscribers()->attach($userId);
    }
}
