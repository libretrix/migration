<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Field\Image;

final readonly class Size
{
    public function __construct(
        public bool $scale = true,
        public int $width = 100,
        public int $height = 100,
    ) {}
}