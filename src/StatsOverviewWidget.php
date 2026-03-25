<?php

namespace Ridwans2\Filamod;

abstract class StatsOverviewWidget extends \Filament\Widgets\StatsOverviewWidget
{
    use \Ridwans2\Filamod\Traits\CanAccessTrait;

    public static function canView(): bool
    {
        return self::canAccess();
    }
}
