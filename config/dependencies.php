<?php

namespace ConductorWordpressPlatformSupport;

return [
    'factories' => [
        \ConductorAppOrchestration\MaintenanceStrategy\MaintenanceStrategyInterface::class => AppMaintenanceStrategyFactory::class,
    ]
];
