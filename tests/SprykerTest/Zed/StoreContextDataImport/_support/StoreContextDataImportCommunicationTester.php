<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerTest\Zed\StoreContextDataImport;

use Codeception\Actor;
use Orm\Zed\StoreContext\Persistence\SpyStoreContextQuery;

/**
 * Inherited Methods
 *
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
 */
class StoreContextDataImportCommunicationTester extends Actor
{
    use _generated\StoreContextDataImportCommunicationTesterActions;

    public function ensureStoreContextDatabaseTableIsEmpty(): void
    {
        $this->getStoreContextQuery()->deleteAll();
    }

    public function getStoreContextCount(): int
    {
        return $this->getStoreContextQuery()->count();
    }

    protected function getStoreContextQuery(): SpyStoreContextQuery
    {
        return SpyStoreContextQuery::create();
    }
}
