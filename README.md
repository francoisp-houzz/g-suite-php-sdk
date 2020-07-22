# g-suite-php-sdk
GSuite php sdk

## Description

This is Vendasta's official PHP SDK for API integration of g-suite.

## Requirements

- PHP 5.5 and above or PHP 7.0 and above
- [PECL](https://pecl.php.net/) (may be used to install the required PHP extensions)
- [Composer](https://getcomposer.org/)
- [PHP gmp extension](http://php.net/manual/en/book.gmp.php)
- OPTIONAL (but recommended): [PHP grpc extension](https://cloud.google.com/php/grpc)

## Installation

Install the requirements from above, then:

```bash
composer require vendasta/gsuite
```

## Authentication

To authenticate your SDK calls, you must provision a service account from within the Vendasta platform.

You must put this file on your server, and set an environment variable to it's path:

```bash
export VENDASTA_APPLICATION_CREDENTIALS=<path to credentials.json>
```

## Client Initialization

It is highly recommended that you use a singleton client instance. Each client initilization will open it's own connection, therefore using a singleton results in reusing a connection, saving time and resources.

Set an environment variable:

```bash
export ENVIRONMENT=<DEMO or PROD> 
```

To instantiate the client:

```php
$environment = getenv("ENVIRONMENT");
if ($environment == null) {
    $environment = "DEMO";
}

$client = new Vendasta\GSuite\V1\GSuitePartnerClient($environment);
```

Notice that the environment will be set to DEMO if it is not specified.

## Getting domain availability
```php
$req = new GSuite\V1\GetDomainInformationRequest();
$req->setDomain("<domain>");
$resp = $client->GetDomainInformation($req);
```