<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Property\Bool;

use Libretrix\Component\Migration\Core\Model\RequirementsInterface;

final readonly class BoolProperty implements BoolPropertyInterface
{
    public function __construct(
        public RequirementsInterface $requirements,
    ) {}
}
