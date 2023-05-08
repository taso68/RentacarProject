<?php
declare(strict_types=1);

namespace Rentacar\Infrastructure\Services\Mail;

class BaseMailParams
{
    public string $view;
    public string $mailTo;
    public array $variables = [];


}