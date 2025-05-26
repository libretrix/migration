<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Field;

interface FieldInterface
{
    public string $code {
        get;
    }

    public bool $isRequired {
        get;
    }
}
