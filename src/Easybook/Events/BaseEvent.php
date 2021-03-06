<?php

/*
 * This file is part of the easybook application.
 *
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Easybook\Events;

use Symfony\Component\EventDispatcher\Event;
use Easybook\DependencyInjection\Application;

class BaseEvent extends Event
{
    public $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function getItem()
    {
        return $this->app->get('publishing.active_item');
    }

    public function setItem($item)
    {
        $this->app->set('publishing.active_item', $item);
    }
}
