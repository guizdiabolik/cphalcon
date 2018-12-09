<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Assets\Collection;

use UnitTester;

/**
 * Class GetResourcesCest
 *
 * @package Phalcon\Test\Unit\Assets\Collection
 */
class GetResourcesCest
{
    /**
     * Tests Phalcon\Assets\Collection :: getResources()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsCollectionGetResources(UnitTester $I)
    {
        $I->wantToTest("Assets\Collection - getResources()");
        $I->skipTest("Need implementation");
    }
}
