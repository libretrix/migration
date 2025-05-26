<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Application;

use Libretrix\Component\Migration\Core\Model\Field\FieldInterface;
use Libretrix\Component\Migration\Core\Model\Property\PropertyInterface;

final class InfoBlockBuilder
{
    public function setField(FieldInterface $field): self
    {
        return $this;
    }

    public function addProperty(PropertyInterface $field): self
    {
        return $this;
    }
}
