<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model;

use Libretrix\Component\Migration\Core\Model\Field\FieldInterface;
use Libretrix\Component\Migration\Core\Model\Property\PropertyInterface;

final class InfoBlock implements InfoBlockInterface
{
    /** @var PropertyInterface[] */
    private array $properties;

    /** @var PropertyInterface[] */
    private array $fields;

    public function addProperty(PropertyInterface $property): InfoBlockInterface
    {
        $this->properties[] = $property;

        return $this;
    }

    public function setField(FieldInterface $field): InfoBlockInterface
    {
        $this->fields[] = $field;

        return $this;
    }

    /** @return array{
     *     properties: array<array-key, PropertyInterface>,
     *     fields: array<array-key, PropertyInterface>
     * }*/
    public function build(): array
    {
        return [
            'properties' => $this->properties,
            'fields' => $this->fields,
        ];
    }
}
