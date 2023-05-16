<?php
declare(strict_types=1);

namespace Rentacar\Domain\Entities\User\Enums;

enum UserTypeEnum:int
{
    case CUSTOMER = 1;
    case WORKER = 2;
    case ADMINISTRATOR = 3;
}
