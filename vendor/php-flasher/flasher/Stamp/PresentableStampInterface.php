<?php

/*
 * This file is part of the PHPFlasher package.
 * (c) Younes KHOUBZA <younes.khoubza@gmail.com>
 */

namespace Flasher\Prime\Stamp;

interface PresentableStampInterface
{
    /**
     * @return array<string, mixed>
     */
    public function toArray();
}
