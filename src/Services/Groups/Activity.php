<?php

namespace LaravelEnso\ControlPanelApi\Services\Groups;

use LaravelEnso\ControlPanelApi\Services\Sensors\Logins;
use LaravelEnso\ControlPanelApi\Services\Sensors\Requests;
use LaravelEnso\ControlPanelApi\Services\Sensors\Sessions;
use LaravelEnso\ControlPanelCommon\Contracts\Group;
use LaravelEnso\ControlPanelCommon\Services\IdProvider;

class Activity extends IdProvider implements Group
{
    public function label(): string
    {
        return 'Activity';
    }

    public function sensors(): array
    {
        return [
            Logins::class, Requests::class, Sessions::class,
        ];
    }

    public function order(): int
    {
        return 500;
    }
}
