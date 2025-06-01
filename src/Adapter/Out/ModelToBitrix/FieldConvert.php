<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Adapter\Out\ModelToBitrix;

use Libretrix\Component\Migration\Core\Model\Field\FieldInterface;

use function is_bool;

final readonly class FieldConvert
{
    public function __construct(public FieldInterface $field) {}

    /** @return array<string, mixed>*/
    public function toArray(): array
    {
        $defaultValue = [];

        foreach (get_object_vars($this->field) as $property => $value) {
            if ('code' === $property || 'isRequired' === $property) {
                continue;
            }

            $key = new CamelToUpperSnake($property);

            if (is_bool($value)) {
                $defaultValue[(string) $key] = (string) new BitrixBoolConvert($value);
            }

            if (!is_bool($value)) {
                $defaultValue[(string) $key] = $value;
            }
        }

        return [
            'IS_REQUIRED' => (string) new BitrixBoolConvert($this->field->requirements->isRequired),
            'DEFAULT_VALUE' => $defaultValue,
        ];
    }
}
