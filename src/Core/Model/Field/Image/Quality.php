<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Field\Image;

final class Quality
{
    public function __construct(
        public string $method = 'resample',
        public int $compression = 95
    ) {}
}
