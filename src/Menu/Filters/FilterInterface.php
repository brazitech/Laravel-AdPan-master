<?php

namespace Brazitech\LaravelAdminLte\Menu\Filters;

use Brazitech\LaravelAdminLte\Menu\Builder;

interface FilterInterface
{
    public function transform($item, Builder $builder);
}
