<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNVE2dXQwZkhETmZvWkRZQ0kvTEFaekFJUHdLbVR6dlpYRkgrN3BFWVZQc3Bpclk4QlRpeU8xTmhxWFduMVhwckZ0QU81bUJPcEsrYzlzTER6ak44UjEwRmp0MkI1UHptWmRiM3EwMzVzYmlVcTljZW9CT282cHJCMHNWUDFMMFFaMFBrcDFpVi9pTUtScW51K2pub25n*/
namespace Aws;

interface ConfigurationProviderInterface
{
    /**
     * Create a default config provider
     *
     * @param array $config
     * @return callable
     */
    public static function defaultProvider(array $config = []);
}
