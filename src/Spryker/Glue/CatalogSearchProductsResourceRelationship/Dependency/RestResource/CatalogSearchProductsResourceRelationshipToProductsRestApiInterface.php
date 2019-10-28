<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\CatalogSearchProductsResourceRelationship\Dependency\RestResource;

use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;

interface CatalogSearchProductsResourceRelationshipToProductsRestApiInterface
{
    /**
     * @param string[] $skus
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $restRequest
     *
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceInterface[]
     */
    public function getBulkProductAbstractBySkus(array $skus, RestRequestInterface $restRequest): array;
}
