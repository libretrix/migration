<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Property\Base;

interface PropertyInterface
{
    public function getCode(): string;

    public function getRequired(): bool;
}
