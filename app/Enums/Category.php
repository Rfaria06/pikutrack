<?php

namespace App\Enums;

use App\Traits\DisplaysName;

enum Category: int
{
    use DisplaysName;

    case OTHER = 0;
    case FOOD = 1;
    case COSMETICS = 2;
    case EDUCATIONAL_OR_PROFESSIONAL = 3;
    case ENTERTAINMENT = 4;
    case TRANSPORTATION = 5;
    case BILLS = 6;
    case SWEET_TREAT = 7;
}
