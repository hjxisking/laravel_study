<?php

namespace App\Repositories;



use App\Models\User;

/**
 * Class UserRepository
 * @package App\Repositories
 */
class UserRepostitory
{

    public $user;

    /**
     * UserRepository constructor.
     * @param User $user 一个空的User模型对象
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function name($user)
    {
        return $user->name;
    }

}
