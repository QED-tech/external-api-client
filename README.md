# Work in progress

# External API Client Library

The External API Client Library is a PHP library that provides an easy and efficient way to interact with external APIs. It offers a number of useful features, such as working with data structures instead of raw arrays, automatic response decoding, support for PSR interfaces and request logging.

## Installation

You can install the External API Client Library via Composer using the following command:

```
composer require qed-tech/external-api-client
```

## Usage

To use the External API Client Library, you need to create an instance of the `ExternalApiClient` class and pass in the required parameters, such as the API endpoint URL, auth credentials, etc. Then you can make requests to the API using the `request()` method.

Here's an example of how to use the External API Client Library:

```php
TODO
```

## Features

### Working with Data Structures

Instead of using raw arrays, the External API Client Library allows you to work with data structures, which provide better type safety and improve code readability. You can define data structures using the `DataStructure` class:

```php
TODO
```

### Automatic Response Decoding

The External API Client Library automatically decodes the API response based on the content type of the response. It supports JSON, XML and HTML content types.

### PSR Interface Support

The External API Client Library is compliant with the PSR-7 HTTP message interfaces and the PSR-18 HTTP client interfaces. It also provides a PSR-3 logger interface for logging requests.

### Request Logging

The External API Client Library logs all requests and responses using the PSR-3 logging interface. You can customize the logging behavior by providing your own logger implementation.

## Contributing

TODO

## License

The External API Client Library is open source software licensed under the MIT license.