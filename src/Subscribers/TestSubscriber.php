<?php

namespace App\Subscribers;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class TestSubscriber implements MessageHandlerInterface
{
    public function __invoke(Test $event)
    {
        echo 'Action';
    }
}
