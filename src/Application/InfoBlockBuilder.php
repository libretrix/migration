<?php

declare(strict_types=1);

namespace Libretrix\Component\Migration\Application;

use Libretrix\Component\Migration\Core\InfoBlock;
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

    public function build(): void
    {
        $builder = new Builder();

        $boolProperty = new BoolProperty();
        $boolProperty = new StringProperty();
        $boolProperty = new MuilipleProperty();

        $iblock = new Iblock();

        $iblock
            ->addType(new Type())
            ->addField()
            ->addPrperty(new BoolProperty())
            ->addPrperty(new StringProperty())
            ->addPrperty(new MuilipleProperty())
            ->addTab()
            ->view();

        $builder
            ->createInfoBlock()
            ->createProperty()->string()->requred()->build()
            ->createProperty()->bool()->requred()->build()
            ->createProperty()->multiple()->requred()->build();
    }
}
