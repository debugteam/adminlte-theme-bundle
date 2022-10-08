<?php

namespace Debugteam\AdminLTEBundle\Service;

class Navigation
{
    public function __construct(
        private readonly string $someData,
        private readonly string $someOtherData
    ) {
    }

    /**
     * @return string
     */
    public function getSomeData(): string {
        return $this->someData;
    }

    /**
     * @return string
     */
    public function getSomeOtherData(): string {
        return $this->someOtherData;
    }
}