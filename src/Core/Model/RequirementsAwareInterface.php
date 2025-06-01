<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model;

interface RequirementsAwareInterface
{
    public RequirementsInterface $requirements {
        get;
    }
}
