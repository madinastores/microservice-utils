<?php

namespace Madinastores\MadinastoresMicroserviceUtils;

class RabbitMQUtils
{
    public static function logConnection(): void
    {
        logger()->info("RabbitMQUtils: RabbitMQ connection initialized.");
    }
}
