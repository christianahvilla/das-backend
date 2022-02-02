<?php

namespace Faker\Provider;

use Faker\Provider\Base;

class RoleProdiver extends Base
{
    protected static $roles = [
        'Admin',
        'Employee'
    ];

    public function role()
    {
        return static::randomElement(static::$roles);
    }
}
