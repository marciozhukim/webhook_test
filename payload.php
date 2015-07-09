<?php
    require_once 'Handler.php';

    use GitHubWebhook\Handler;

    $handler = new Handler("potato1234!", __DIR__);
    $handler->handle();


