<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Application;

use Libretrix\Component\Migration\Core\Model\Property\Bool\BoolProperty;
use Libretrix\Component\Migration\Core\Model\Property\Bool\BoolPropertyInterface;
use Libretrix\Component\Migration\Core\Model\Property\Int\IntProperty;
use Libretrix\Component\Migration\Core\Model\Property\Int\IntPropertyInterface;
use Libretrix\Component\Migration\Core\Model\Property\String\StringProperty;
use Libretrix\Component\Migration\Core\Model\Property\String\StringPropertyInterface;

class PropertyBuilder implements PropertyBuilderInterface
{
    private string $propertyName;
    private string $code;
    private bool|int|string $value;
    private bool $requiredProperty = false;

    private const array PROPERTY_MAP = [
        'int' => IntProperty::class,
        'bool' => BoolProperty::class,
        'string' => StringProperty::class,
    ];

    public function __construct() {}

    public function code(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function value(bool|int|string $value): self
    {
        $this->value = $value;
        return $this;
    }

    public function required(): self
    {
        $this->requiredProperty = true;
        return $this;
    }

    public function string(): self
    {
        $this->propertyName = 'string';
        return $this;
    }

    public function int(): self
    {
        $this->propertyName = 'int';
        return $this;
    }

    public function bool(): self
    {
        $this->propertyName = 'bool';
        return $this;
    }

    public function build(): BoolPropertyInterface|IntPropertyInterface|StringPropertyInterface
    {
        if (!isset(self::PROPERTY_MAP[$this->propertyName])) {
            throw new \InvalidArgumentException('Неизвестный тип у свойства');
        }

        $className = self::PROPERTY_MAP[$this->propertyName];

        return new $className(
            code: $this->code,
            value: $this->value,
            required: $this->requiredProperty
        );
    }
}