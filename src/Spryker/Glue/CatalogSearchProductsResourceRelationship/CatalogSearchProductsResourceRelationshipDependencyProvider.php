<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\CatalogSearchProductsResourceRelationship;

use Spryker\Glue\CatalogSearchProductsResourceRelationship\Dependency\RestResource\CatalogSearchProductsResourceRelationshipToProductsRestApiBridge;
use Spryker\Glue\Kernel\AbstractBundleDependencyProvider;
use Spryker\Glue\Kernel\Container;

/**
 * @method \Spryker\Glue\CatalogSearchProductsResourceRelationship\CatalogSearchProductsResourceRelationshipConfig getConfig()
 */
class CatalogSearchProductsResourceRelationshipDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const RESOURCE_PRODUCTS = 'RESOURCE_PRODUCTS';

    public function provideDependencies(Container $container): Container
    {
        $container = parent::provideDependencies($container);
        $container = $this->addProductsResource($container);

        return $container;
    }

    protected function addProductsResource(Container $container): Container
    {
        $container->set(static::RESOURCE_PRODUCTS, function (Container $container) {
            return new CatalogSearchProductsResourceRelationshipToProductsRestApiBridge(
                $container->getLocator()->productsRestApi()->resource(),
            );
        });

        return $container;
    }
}
