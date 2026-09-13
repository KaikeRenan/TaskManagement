<?php

namespace Modules\User\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use Modules\User\Interfaces\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(
        protected User $user
    )
    {
        parent::__construct($user);
    }

    // We can add any additional methods specific to the UserRepository here if needed in the future.
}
