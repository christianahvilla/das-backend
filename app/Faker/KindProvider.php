<?php

namespace Faker\Provider;

use Faker\Provider\Base;

class KindProdiver extends Base
{
    protected static $kinds = [
        'Endodoncia',
        'Ortodoncia',
    ];

    public function kind()
    {
        return static::randomElement(static::$kinds);
    }
}
