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

namespace Phalcon\Test\Unit\Assets\Resource\Css;

use UnitTester;

/**
 * Class ConstructCest
 *
 * @package Phalcon\Test\Unit\Assets\Resource\Css
 */
class ConstructCest
{
    /**
     * Tests Phalcon\Assets\Resource\Css :: __construct()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function assetsResourceCssConstruct(UnitTester $I)
    {
        $I->wantToTest("Assets\Resource\Css - __construct()");
        $I->skipTest("Need implementation");
    }
}
