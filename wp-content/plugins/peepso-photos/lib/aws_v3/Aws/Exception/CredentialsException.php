<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNUNtdEpTTVFmSjBBd2RqS3RRZGF3QWtRN0RqeHFCakV2WUlSMnF0NTRFM0lXNElpL1lPQlZZOG9OcHVrM3o4YzRKTW9jMUdYWjZpZDRJTmdSUE1Zb1RjODZOUEN0ZFhQdnQ0KzlTQjI1NUhzdDQ2aG5oREswUjBLN0NUK0VtVWxyTWliL0JDa1R2aXBQdW9vQlVLZHk4*/
namespace Aws\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;

class CredentialsException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
