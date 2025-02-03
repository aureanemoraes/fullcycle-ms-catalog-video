<?php

namespace Core\Domain\Entity\Traits;

use Exception;

trait MagicMethods
{
    public function __get($property)
    {
        if (isset($this->{$property})) return $this->{$property};

        $className = get_class($this);

        throw new Exception("Property '{$property}' does not exist on class '{$className}'");
    }
}