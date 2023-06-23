
# DNS Resolver Library for Laravel

The DNS Resolver Library is a Laravel package that provides a convenient way to retrieve DNS records for a specified domain name.

## Requirements

- PHP >= 8.1
- Laravel >= 8.0

## Installation

Add the package to the vendor directory. 
Add to composer.json:
```json
"repositories": [
    {
        "type": "path",
        "url": "local_path_to_the_project\\vendor\\dns-resolver-library\\"
    }   
]
```
Add to the dependecies:
```json
"vova-holub/dns-resolver-library": "1.0.0"
```
Run composer update:
```bash
composer update
```
Register a provider by adding this part to the config/app.php:

```php
VH\DnsResolver\Providers\DnsResolverProvider::class
```

## Usage

```php
Route::get('/dns-records/', function () {
    $dnsResolver = app(DnsResolver::class);
    $records = $dnsResolver->getDnsRecords('gmail.com');
    dd($records);
});
```
