<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Application;

// ->string()->requred()->build()

use Libretrix\Component\Migration\Core\Model\Property\Bool\BoolPropertyInterface;
use Libretrix\Component\Migration\Core\Model\Property\Int\IntPropertyInterface;
use Libretrix\Component\Migration\Core\Model\Property\String\StringPropertyInterface;

interface PropertyBuilderInterface
{
    public function value(): void;

    public function required(): void;

    public function string(): void;

    public function int(): void;

    public function bool(): void;

    public function build(): BoolPropertyInterface|IntPropertyInterface|StringPropertyInterface;
}
