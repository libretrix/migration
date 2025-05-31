<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Property\Bool;

class BoolProperty implements BoolPropertyInterface
{
    public function __construct(
        public string $code,
        public bool $value,
        public bool $required
    ) {}

    public function getCode(): string
    {
        return $this->code;
    }

    public function getValue(): bool
    {
        return $this->value;
    }

    public function getRequired(): bool
    {
        return $this->required;
    }
}
