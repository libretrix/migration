<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Adapter\Out\ModelToBitrix;

final readonly class BitrixBoolConvert
{
    public function __construct(private bool $input) {}

    public function __toString(): string
    {
        return $this->input ? 'Y' : 'N';
    }
}
