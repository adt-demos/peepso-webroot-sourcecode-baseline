<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNS9pRnJhYlhrR0NtU0YzNkszbTJXMDhPM1d2TVV4STkrRXh6YjZONzhheWFmWmhUUER5YXk5WWs1Z0dFb2JySDNCSGYzbzM3NHFQTVJNU0ZjVVdLQWppRU92QlQ4cE8ydnpmQWxIMEFlUFZxYTBkTzZJTnF3WkVpQTdDaVdkM3B0ajhtaE1vVGhqRmNDYzVUT2hBWHVw*/
namespace Aws\S3\UseArnRegion\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;

/**
 * Represents an error interacting with configuration for S3's UseArnRegion
 */
class ConfigurationException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
