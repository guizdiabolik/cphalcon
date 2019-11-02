<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Html\Link\Link;

use Phalcon\Html\Link\Link;
use UnitTester;

class GetAttributesCest
{
    /**
     * Tests Phalcon\Html\Link\Link :: getAttributes()
     *
     * @since  2019-06-15
     */
    public function linkLinkGetAttributes(UnitTester $I)
    {
        $I->wantToTest('Link\Link - getAttributes()');

        $href       = 'https://dev.cardoe.ld';
        $attributes = [
            'one'   => true,
            'two'   => 123,
            'three' => 'four',
            'five'  => [
                'six',
                'seven',
            ],
        ];
        $link       = new Link('payment', $href, $attributes);

        $I->assertEquals($attributes, $link->getAttributes());
    }
}
