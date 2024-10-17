<?php

namespace App\Enums;

use App\Traits\DisplaysName;

enum UserType: int
{
    use DisplaysName;

    case NORMAL = 0;
    case ADMIN = 1;
}
