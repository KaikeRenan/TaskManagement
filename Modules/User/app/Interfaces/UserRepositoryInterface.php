<?php

namespace Modules\User\Interfaces;

use App\Repositories\Interfaces\BaseInterface;

interface UserRepositoryInterface extends BaseInterface
{
    // We need to define the methods that are specific to the User model here, if any.
    // For now, we can leave it empty since it extends BaseInterface which already has the basic CRUD methods defined.
}
