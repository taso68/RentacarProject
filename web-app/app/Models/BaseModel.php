<?php
declare(strict_types=1);

namespace App\Models;

use Doctrine\Common\Collections\ArrayCollection;

abstract class BaseModel
{
    abstract public static function listModel(ArrayCollection $collection): array;
}
