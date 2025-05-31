<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Field\Image;

abstract readonly class AbstractImageField
{
    public function __construct(
        public bool $isRequired = false,
        public bool $ignoreErrors = false,
        public Size $size,
        public Quality $quality,
        public ?TextWatermark $textWatermark = null,
        public ?ImageWatermark $watermark = null,
    ) {}
}
