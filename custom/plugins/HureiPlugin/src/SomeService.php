<?php

namespace HureiPlugin;

use Composer\EventDispatcher\EventSubscriberInterface;
use Shopware\Core\System\SystemConfig\SystemConfigService;

class SomeService implements EventSubscriberInterface
{
    public function __construct(private SystemConfigService $SystemConfigService) {
    }

    public static function getSubscribedEvents()
    {
        // TODO: Implement getSubscribedEvents() method.
    }
}
