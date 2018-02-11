<?php

namespace ConductorWordpressPlatformSupport;

return [
    'invokables' => [
        \ConductorAppOrchestration\MaintenanceStrategy\MaintenanceStrategyInterface::class => AppMaintenanceStrategyFactory::class,
    ]
];
