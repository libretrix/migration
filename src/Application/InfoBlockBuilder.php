<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Application;

use Libretrix\Component\Migration\Core\Model\Field\Image\PreviewImage;
use Libretrix\Component\Migration\Core\Model\Field\Image\Quality;
use Libretrix\Component\Migration\Core\Model\Field\Image\Size;
use Libretrix\Component\Migration\Core\Model\InfoBlock;
use Libretrix\Component\Migration\Core\Model\Property\Bool\BoolProperty;
use Libretrix\Component\Migration\Core\Model\Property\Int\IntProperty;
use Libretrix\Component\Migration\Core\Model\Property\String\StringProperty;
use Libretrix\Component\Migration\Core\Model\Requirements;

final class InfoBlockBuilder
{
    public function build(): void
    {
        $block = new InfoBlock();

        $block
            ->addProperty(
                new BoolProperty(
                    new Requirements(
                        'test-code',
                        true
                    ),
                )
            )
            ->addProperty(
                new StringProperty(
                    new Requirements(
                        'test-code',
                        true
                    ),
                )
            )
            ->addProperty(
                new IntProperty(
                    new Requirements(
                        'test-code',
                        true
                    ),
                )
            )
            ->setField(
                new PreviewImage(
                    requirements: new Requirements(
                        'test-code',
                        true
                    ),
                    size: new Size(),
                    quality: new Quality(),
                    ignoreErrors: true
                )
            )
        ;
    }
}
