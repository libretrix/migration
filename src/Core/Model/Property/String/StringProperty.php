<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Property\String;

class StringProperty implements StringPropertyInterface
{
    public function __construct(
        public string $code,
        public string $value,
        public bool $required
    ) {}

    public function getCode(): string
    {
        return $this->code;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getRequired(): bool
    {
        return $this->required;
    }
}
