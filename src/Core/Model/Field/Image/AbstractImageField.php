<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Field\Image;

use Libretrix\Component\Migration\Core\Model\Field\FieldInterface;
use Libretrix\Component\Migration\Core\Model\Requirements;

abstract readonly class AbstractImageField implements FieldInterface
{
    public function __construct(
        public Requirements $requirements,
        public Size $size,
        public Quality $quality,
        public ?TextWatermark $textWatermark = null,
        public ?ImageWatermark $watermark = null,
        public bool $ignoreErrors = false,
    ) {}
}
