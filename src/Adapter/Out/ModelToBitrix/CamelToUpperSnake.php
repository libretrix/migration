<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Adapter\Out\ModelToBitrix;

final readonly class CamelToUpperSnake
{
    public function __construct(private string $input) {}

    public function __toString(): string
    {
        return strtoupper(preg_replace('/(?<!^)[A-Z]/', '_$0', $this->input));
    }
}
