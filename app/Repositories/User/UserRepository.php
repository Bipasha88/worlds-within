<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\Base\BaseRepository;

class UserRepository extends BaseRepository implements IUserRepository{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
