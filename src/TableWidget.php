<?php

namespace Ridwans2\Filamod;

abstract class TableWidget extends \Filament\Widgets\TableWidget
{
    use \Ridwans2\Filamod\Traits\CanAccessTrait;

    public static function canView(): bool
    {
        return self::canAccess();
    }
}
