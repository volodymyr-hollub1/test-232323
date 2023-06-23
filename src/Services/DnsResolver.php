<?php

namespace VH\DnsResolver\Services;

class DnsResolver
{
    /**
     * Retrieve DNS records for a domain.
     *
     * @param  string  $domain
     * @return array
     */
    public function getDnsRecords(string $domain): array
    {
        $records = dns_get_record($domain);

        foreach ($records as &$record) {
            if (isset($record['host'])) {
                $record['name'] = $record['host'];
                unset($record['host']);
            }
        }

        return $records;
    }
}
