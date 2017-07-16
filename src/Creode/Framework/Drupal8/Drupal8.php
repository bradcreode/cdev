<?php

namespace Creode\Framework\Drupal8;

use Creode\Framework\Framework;

class Drupal8 implements Framework
{
    const NAME = 'drupal8';

    const DRUSH = 'drush';

    /**
     * Returns commands to clear cache on this framework
     * @return array
     */
    public function clearCache() : array
    {
        return [
            [self::DRUSH, 'cc:all']
        ];
    }
}