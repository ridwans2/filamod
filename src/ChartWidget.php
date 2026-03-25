<?php

namespace Ridwans2\Filamod;

abstract class ChartWidget extends \Filament\Widgets\ChartWidget
{
    use \Ridwans2\Filamod\Traits\CanAccessTrait;

    public static function canView(): bool
    {
        return self::canAccess();
    }
}
