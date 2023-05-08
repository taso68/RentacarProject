<?php

declare(strict_types=1);

namespace Rentacar\Application\Contracts\UseCases\Car;

use Doctrine\Common\Collections\ArrayCollection;

interface GetCarsUseCaseInterface
{
    public function execute(): ArrayCollection;

}