<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNU1tQlIrYW1CNUFIZlRUWmpqK2grdnRPWi9hNzVJMFduRERRSGIvK1BSdThGZ0ZZOUJwVGs2Vk9yT0Z1cFZsWnQyc0pSckVrSjd6MGxhbHRtQUxHZ2hMcTBreFZ1SE9LRGtRanZ1eGVpT0Z6R1B4OWNHWloyd3J0QTRCTHFxWk5UMHdDWnJySHdpdzVOa1FTTWFqU1dI*/
namespace Aws\Credentials;

/**
 * Provides access to the AWS credentials used for accessing AWS services: AWS
 * access key ID, secret access key, and security token. These credentials are
 * used to securely sign requests to AWS services.
 */
interface CredentialsInterface
{
    /**
     * Returns the AWS access key ID for this credentials object.
     *
     * @return string
     */
    public function getAccessKeyId();

    /**
     * Returns the AWS secret access key for this credentials object.
     *
     * @return string
     */
    public function getSecretKey();

    /**
     * Get the associated security token if available
     *
     * @return string|null
     */
    public function getSecurityToken();

    /**
     * Get the UNIX timestamp in which the credentials will expire
     *
     * @return int|null
     */
    public function getExpiration();

    /**
     * Check if the credentials are expired
     *
     * @return bool
     */
    public function isExpired();

    /**
     * Converts the credentials to an associative array.
     *
     * @return array
     */
    public function toArray();
}
