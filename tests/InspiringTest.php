<?php

namespace Gmsantos\Tests;

use Gmsantos\Inspiring;
use PHPUnit\Framework\TestCase;

class InspiringTest extends TestCase
{
    private $quote;

    public function setUp(): void
    {
        $this->quote = Inspiring::quote();
    }

    public function test_quote_follows_a_format_pattern(): void
    {
        $this->assertStringMatchesFormat('%a - %a', $this->quote);
    }
}
