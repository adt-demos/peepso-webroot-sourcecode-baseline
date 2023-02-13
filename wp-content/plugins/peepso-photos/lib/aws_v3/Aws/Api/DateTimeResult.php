<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNkx5c0IvekhXYzU3YzkydEozb05Kd3h3VWsrbEJlQkhZMFVyS1JMN3J6ajQ2OE1kNUkvTXJlY01nV0JjZ3k2MnFRK1FiOHQ4RHZMRy9JbnRWM01MajFsMkhkdUgveitYdnJkd2Y2dndzaWVZMitjVUpFNXExU0tjVVpONHhNc1U0PQ==*/

namespace Aws\Api;

use Aws\Api\Parser\Exception\ParserException;
use DateTime;
use DateTimeZone;
use Exception;

/**
 * DateTime overrides that make DateTime work more seamlessly as a string,
 * with JSON documents, and with JMESPath.
 */
class DateTimeResult extends \DateTime implements \JsonSerializable
{
    /**
     * Create a new DateTimeResult from a unix timestamp.
     * The Unix epoch (or Unix time or POSIX time or Unix
     * timestamp) is the number of seconds that have elapsed since
     * January 1, 1970 (midnight UTC/GMT).
     *
     * @return DateTimeResult
     * @throws Exception
     */
    public static function fromEpoch($unixTimestamp)
    {
        if (!is_numeric($unixTimestamp)) {
            throw new ParserException('Invalid timestamp value passed to DateTimeResult::fromEpoch');
        }

        // PHP 5.5 does not support sub-second precision
        if (\PHP_VERSION_ID < 56000) {
            return new self(gmdate('c', $unixTimestamp));
        }

        $decimalSeparator = isset(localeconv()['decimal_point']) ? localeconv()['decimal_point'] : ".";
        $formatString = "U" . $decimalSeparator . "u";
        $dateTime = DateTime::createFromFormat(
            $formatString,
            sprintf('%0.6f', $unixTimestamp),
            new DateTimeZone('UTC')
        );

        if (false === $dateTime) {
            throw new ParserException('Invalid timestamp value passed to DateTimeResult::fromEpoch');
        }

        return new self(
            $dateTime->format('Y-m-d H:i:s.u'),
            new DateTimeZone('UTC')
        );
    }

    /**
     * @return DateTimeResult
     */
    public static function fromISO8601($iso8601Timestamp)
    {
        if (is_numeric($iso8601Timestamp) || !is_string($iso8601Timestamp)) {
            throw new ParserException('Invalid timestamp value passed to DateTimeResult::fromISO8601');
        }

        return new DateTimeResult($iso8601Timestamp);
    }

    /**
     * Create a new DateTimeResult from an unknown timestamp.
     *
     * @return DateTimeResult
     * @throws Exception
     */
    public static function fromTimestamp($timestamp, $expectedFormat = null)
    {
        if (empty($timestamp)) {
            return self::fromEpoch(0);
        }

        if (!(is_string($timestamp) || is_numeric($timestamp))) {
            throw new ParserException('Invalid timestamp value passed to DateTimeResult::fromTimestamp');
        }

        try {
            if ($expectedFormat == 'iso8601') {
                try {
                    return self::fromISO8601($timestamp);
                } catch (Exception $exception) {
                    return self::fromEpoch($timestamp);
                }
            } else if ($expectedFormat == 'unixTimestamp') {
                try {
                    return self::fromEpoch($timestamp);
                } catch (Exception $exception) {
                    return self::fromISO8601($timestamp);
                }
            } else if (\Aws\is_valid_epoch($timestamp)) {
                return self::fromEpoch($timestamp);
            }
            return self::fromISO8601($timestamp);
        } catch (Exception $exception) {
            throw new ParserException('Invalid timestamp value passed to DateTimeResult::fromTimestamp');
        }
    }

    /**
     * Serialize the DateTimeResult as an ISO 8601 date string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->format('c');
    }

    /**
     * Serialize the date as an ISO 8601 date when serializing as JSON.
     *
     * @return string
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return (string) $this;
    }
}
