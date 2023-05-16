<?php

namespace Rentacar\Domain\Entities\User\Enums;

enum UserTypeEnum
{
    case WORKER;
    case CUSTOMER;
    case ADMINISTRATOR;
}
