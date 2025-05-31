<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Field;

final readonly class DetailPicture implements FieldInterface
{
    public function __construct(
        public string $code = 'PREVIEW_PICTURE',
        public bool $isRequired = false,
        public bool $scale = true,
        public int $width = 792,
        public int $height = 404,

        public bool $ignoreErrors = false,

        public string $method = 'resample',
        public int $compression = 95,

        public bool $useWatermarkText = false,
        public string $watermarkText = '',
        public string $watermarkTextFont = '',
        public string $watermarkTextColor = '',
        public string $watermarkTextSize = '',

        public string $watermarkTextPosition = 'tl',
        public bool $useWatermarkFile = false,
        public string $watermarkFile = '',
        public string $watermarkFileAlpha = '',
        public string $watermarkFilePosition = 'tl',
        public string $watermarkFileOrder = 'tl',
    ) {}
}
