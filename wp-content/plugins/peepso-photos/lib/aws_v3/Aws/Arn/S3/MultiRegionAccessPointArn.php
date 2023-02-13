<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN2VnVC9WbDlVYURENEJjRlYvSGpoTWZaR0h5SUJzVEZFU2daSW9nUVFSU1hwbFB0bXVsKy92cUo3bXpCaFJmd2hSS1d3TTNrcHhLazgzejhSbVhMdDdJZDJRUWc1UTlpd2VEamZQQlpoVWR0aTY1Vms2T2lKNlE3YW01dkVJeklMdkxDNWhBYkt6bUJXaXVOUkc2UURZ*/
namespace Aws\Arn\S3;

use Aws\Arn\Arn;
use Aws\Arn\ResourceTypeAndIdTrait;

/**
 * This class represents an S3 multi-region bucket ARN, which is in the
 * following format:
 *
 * @internal
 */
class MultiRegionAccessPointArn extends AccessPointArn
{
    use ResourceTypeAndIdTrait;

    /**
     * Parses a string into an associative array of components that represent
     * a MultiRegionArn
     *
     * @param $string
     * @return array
     */
    public static function parse($string)
    {
        return parent::parse($string);
    }

    /**
     *
     * @param array $data
     */
    public static function validate(array $data)
    {
        Arn::validate($data);
    }

}
