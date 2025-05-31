<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Property\Int;

class IntProperty implements IntPropertyInterface
{
    public function __construct(
        public string $code,
        public int $value,
        public bool $required
    ) {}

    public function getCode(): string
    {
        return $this->code;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getRequired(): bool
    {
        return $this->required;
    }
}
