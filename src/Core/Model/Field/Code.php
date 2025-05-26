<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model\Field;

final readonly class Code implements FieldInterface
{
    public function __construct(
        public string $code = 'PREVIEW_PICTURE',
        public bool $unique = true,
        public bool $transliteration = true,
        public int $transLen = 100,
        public string $transCase = 'L',
        public string $transSpace = '-',
        public string $transOther = '_',
        public bool $transEat = true,
        public bool $useGoogle = false,
    ) {}
}
