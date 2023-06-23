<?php

namespace VH\DnsResolver\Tests;

use VH\DnsResolver\Services\DnsResolver;
use PHPUnit\Framework\TestCase;

class DnsResolverTest extends TestCase
{
    public function testGetRecords()
    {
        $domainRecords = new DnsResolver();
        $records = $domainRecords->getDnsRecords('gmail.com');

        // Perform assertions to check if the records are as expected
        $this->assertIsArray($records);
        $this->assertNotEmpty($records);
        $this->assertContains('A', $records[0]);
    }
}
