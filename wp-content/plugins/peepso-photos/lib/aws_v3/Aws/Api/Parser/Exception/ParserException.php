<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNTdEdjhwOHN1TGJxRnpvU1lvYTV6blZCb3ltczBrNDVDemJZUFZiMlJwb29VYWd3cUxSbTBOOUc3L2xvd1lSeGRwbWdSNFVwNCtyd1A0eEx2N2NTT2pCWVVLTUIwdE9qcnFJd1haOFRkSS83Y1JsNEEwUXlML2NEVWxiY25qWkRZPQ==*/
namespace Aws\Api\Parser\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;
use Aws\ResponseContainerInterface;
use Psr\Http\Message\ResponseInterface;

class ParserException extends \RuntimeException implements
    MonitoringEventsInterface,
    ResponseContainerInterface
{
    use HasMonitoringEventsTrait;

    private $errorCode;
    private $requestId;
    private $response;

    public function __construct($message = '', $code = 0, $previous = null, array $context = [])
    {
        $this->errorCode = isset($context['error_code']) ? $context['error_code'] : null;
        $this->requestId = isset($context['request_id']) ? $context['request_id'] : null;
        $this->response = isset($context['response']) ? $context['response'] : null;
        parent::__construct($message, $code, $previous);
    }

    /**
     * Get the error code, if any.
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Get the request ID, if any.
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Get the received HTTP response if any.
     *
     * @return ResponseInterface|null
     */
    public function getResponse()
    {
        return $this->response;
    }
}
