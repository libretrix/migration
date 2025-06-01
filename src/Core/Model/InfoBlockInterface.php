<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Core\Model;

use Libretrix\Component\Migration\Core\Model\Field\FieldInterface;
use Libretrix\Component\Migration\Core\Model\Property\PropertyInterface;

interface InfoBlockInterface
{
    public function addProperty(PropertyInterface $property): self;

    public function setField(FieldInterface $field): self;
}
