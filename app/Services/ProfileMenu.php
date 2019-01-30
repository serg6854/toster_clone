<?php

namespace App\Services;

use App\Models\User;

class ProfileMenu
{
    /**
     * @var User
     */
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    protected $tabItems = [
        ['route' => 'profile.answers', 'title' => 'Ответы'],
        ['route' => 'profile.questions', 'title' => 'Вопросы'],
    ];

    public function getItems()
    {
        return $this->tabItems;
    }

    public function isActive($item)
    {
        return request()->routeIs($item['route']);
    }
}
