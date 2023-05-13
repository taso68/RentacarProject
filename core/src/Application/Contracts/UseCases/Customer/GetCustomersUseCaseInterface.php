<?php
declare(strict_types=1);

namespace Rentacar\Application\Contracts\UseCases\Customer;

use Doctrine\Common\Collections\ArrayCollection;

interface GetCustomersUseCaseInterface
{
    public function execute(): ArrayCollection;

}