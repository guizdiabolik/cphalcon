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

namespace Phalcon\Test\Unit\Assets\Resource;

use UnitTester;

/**
 * Class GetRealTargetUriCest
 *
 * @package Phalcon\Test\Unit\Assets\Resource
 */
class GetRealTargetUriCest
{
    /**
     * Tests Phalcon\Assets\Resource :: getRealTargetUri()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsResourceGetRealTargetUri(UnitTester $I)
    {
        $I->wantToTest("Assets\Resource - getRealTargetUri()");
        $I->skipTest("Need implementation");
    }
}
