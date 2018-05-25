<?php

namespace ConductorWordpressPlatformSupport;

return [
    'factories' => [
        \ConductorAppOrchestration\Maintenance\MaintenanceStrategyInterface::class => Maintenance\AppMaintenanceStrategyFactory::class,
    ],
    'aliases' => [
        \ConductorAppOrchestration\Deploy\CodeDeploymentStateInterface::class      => Deploy\CodeDeploymentState::class,
    ]
];
