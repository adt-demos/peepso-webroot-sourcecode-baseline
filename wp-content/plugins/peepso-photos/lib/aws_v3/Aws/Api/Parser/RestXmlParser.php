<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNS83cGtmcjlNY2JxVHpNSXhJeHdQcU14dXlBUS80cE5oTC8wSm1UVlJYYWpmRzJPTFpvVUJzNHhRWWZFelpFUkw4eDU1WmVWeVpTK3djOW1Fc2JObXh5Qitkenc3UWF5dExXWWxUMkM0SnBwUzZUWXNlMXRRRHZGL0FRUkgwMGRvPQ==*/
namespace Aws\Api\Parser;

use Aws\Api\StructureShape;
use Aws\Api\Service;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * @internal Implements REST-XML parsing (e.g., S3, CloudFront, etc...)
 */
class RestXmlParser extends AbstractRestParser
{
    use PayloadParserTrait;

    /**
     * @param Service   $api    Service description
     * @param XmlParser $parser XML body parser
     */
    public function __construct(Service $api, XmlParser $parser = null)
    {
        parent::__construct($api);
        $this->parser = $parser ?: new XmlParser();
    }

    protected function payload(
        ResponseInterface $response,
        StructureShape $member,
        array &$result
    ) {
        $result += $this->parseMemberFromStream($response->getBody(), $member, $response);
    }

    public function parseMemberFromStream(
        StreamInterface $stream,
        StructureShape $member,
        $response
    ) {
        $xml = $this->parseXml($stream, $response);
        return $this->parser->parse($member, $xml);
    }
}
