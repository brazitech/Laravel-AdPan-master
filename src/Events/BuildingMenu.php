<?php

namespace Brazitech\LaravelAdPan\Events;

use Brazitech\LaravelAdPan\Menu\Builder;

class BuildingMenu
{
    public $menu;

    public function __construct(Builder $menu)
    {
        $this->menu = $menu;
    }
}
