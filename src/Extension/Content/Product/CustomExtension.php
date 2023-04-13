<?php

namespace Shopware\Production\Extension\Content\Product;

use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class CustomExtension extends EntityExtension
{

    /**
     * {@inheritDoc}
     */
    public function getDefinitionClass(): string
    {
        return ProductDefinition::class;
    }

    /**
     * {@inheritDoc}
     */
    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            new StringField('custom_date', 'customDate'),
        );
    }
}
