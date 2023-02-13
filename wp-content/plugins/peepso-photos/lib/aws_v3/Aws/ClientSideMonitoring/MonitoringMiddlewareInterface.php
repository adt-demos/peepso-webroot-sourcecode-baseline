<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNlpsWXNGQlE1VExjMDZFSk5sTWtHNW9acVlZYTQ4Szk4VVA3TFpDaWU3TDBZeTZKTTRmWHdkNmQ0VGFlSlVSWlZOc09BTUc3bnhZalJ5UW1lTE5KdTd5Tk00Uk8xa3VsSXdNV1dzQWRyM2JSeUhpNkRYN2x5dFpvTHZiNVFuYnVQK0Ixd3ljQ0lJdGdYM1NHLys0eWZx*/

namespace Aws\ClientSideMonitoring;

use Aws\CommandInterface;
use Aws\Exception\AwsException;
use Aws\ResultInterface;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

/**
 * @internal
 */
interface MonitoringMiddlewareInterface
{

    /**
     * Data for event properties to be sent to the monitoring agent.
     *
     * @param RequestInterface $request
     * @return array
     */
    public static function getRequestData(RequestInterface $request);


    /**
     * Data for event properties to be sent to the monitoring agent.
     *
     * @param ResultInterface|AwsException|\Exception $klass
     * @return array
     */
    public static function getResponseData($klass);

    public function __invoke(CommandInterface $cmd, RequestInterface $request);
}