<?php

namespace DevopsToolWordpressPlatformSupport;

return [
    'invokables' => [
        \DevopsToolAppOrchestration\MaintenanceStrategy\MaintenanceStrategyInterface::class => AppMaintenanceStrategyFactory::class,
    ]
];
