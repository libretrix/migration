<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Field\Image;

final readonly class TextWatermark
{
    public function __construct(
        public string $text = '',
        public string $font = '',
        public string $color = '',
        public string $size = '',
        public string $position = 'tl',
    ) {}
}
