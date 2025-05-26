<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core;

use Libretrix\Component\Migration\Core\Model\Field\FieldInterface;
use Libretrix\Component\Migration\Core\Model\Property\PropertyInterface;

final class InfoBlock
{
    /** @var FieldInterface[] */
    private array $fields;

    /** @var PropertyInterface[] */
    private array $properties;

    public function __construct(
        public readonly string $code,
        public readonly string $enName,
        public readonly string $ruName,
        public readonly bool $useSections = false,
    ) {}

    public function setField(FieldInterface $field): self
    {
        $this->fields[] = $field;

        return $this;
    }

    public function addProperty(PropertyInterface $property): self
    {
        $this->properties[] = $property;

        return $this;
    }

    /** @return FieldInterface[] */
    public function getFields(): array
    {
        return $this->fields;
    }

    /** @return PropertyInterface[] */
    public function getProperties(): array
    {
        return $this->properties;
    }
}
