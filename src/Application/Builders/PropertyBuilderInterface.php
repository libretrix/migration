<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Application;

// ->string()->requred()->build()

use InvalidArgumentException;
use Libretrix\Component\Migration\Core\Model\Property\Bool\BoolPropertyInterface;
use Libretrix\Component\Migration\Core\Model\Property\Int\IntPropertyInterface;
use Libretrix\Component\Migration\Core\Model\Property\String\StringPropertyInterface;

interface PropertyBuilderInterface
{

    public function code(string $code): self;

    public function value(bool|int|string $value): self;

    public function required(): self;


    public function string(): self;

    public function int(): self;


    public function bool(): self;

    /**
     * @throws InvalidArgumentException Если тип свойства не указан или неверный
     */
    public function build(): BoolPropertyInterface|IntPropertyInterface|StringPropertyInterface;
}