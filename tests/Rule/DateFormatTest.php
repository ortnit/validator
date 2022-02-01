<?php

namespace Ortnit\Tests\Rule;

use Cassandra\Date;
use Ortnit\Validator\Rule\DateFormat;
use PHPUnit\Framework\TestCase;

class DateFormatTest extends TestCase
{
    public function testUsingDateFormat()
    {
        $date = new \DateTime();
        $dateFormat = $date->format('Y-m-d');

        $rule = new DateFormat();
        $this->assertTrue($rule->validate($dateFormat));
    }

    /**
     * @return void
     */
    public function testUsingWrongDateFormat()
    {
        $germanDateFormat = '07.03.2094';

        $rule = new DateFormat();
        $this->assertFalse($rule->validate($germanDateFormat));
    }
}
