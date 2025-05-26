<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Field;

final readonly class PreviewPicture implements FieldInterface
{
    public function __construct(
        public string $code = 'DETAIL_PICTURE',
        public bool $fromDetail = true,
        public bool $updateWithDetail = false,
        public bool $deleteWithDetail = false,
        public bool $scale = true,
        public int $width = 100,
        public int $height = 100,
        public bool $ignoreErrors = true,
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
        public string $watermarkFileOrder = '',
    ) {}
}
