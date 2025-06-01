<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Property\Int;

use Libretrix\Component\Migration\Core\Model\RequirementsInterface;

class IntProperty implements IntPropertyInterface
{
    public function __construct(
        public RequirementsInterface $requirements,
    ) {}
}
