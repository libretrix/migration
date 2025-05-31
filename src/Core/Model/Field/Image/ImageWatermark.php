<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Field\Image;

final readonly class ImageWatermark
{
    public function __construct(
        public string $file = '',
        public string $alpha = '',
        public string $position = 'tl',
        public string $order = 'tl',
    ) {}
}
