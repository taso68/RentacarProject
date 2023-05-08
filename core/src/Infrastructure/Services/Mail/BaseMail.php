<?php
declare(strict_types=1);

namespace Rentacar\Infrastructure\Services\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BaseMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(private BaseMailParams $params)
    {

    }

    public function build(): self
    {
        return $this->view($this->params->view, $this->params->variables);
    }
}