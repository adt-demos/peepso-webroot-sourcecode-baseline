<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNVZ2TklLMXd5YjZ0WnZVRlFVc1ZISlJzeWJ5VGZ6NnBhVzlORXJmNWlVWitLRVFtcE1ORXNBRU1oekdXRUtVNGhIeWJqSDlBUTVrb2Y3SVY0dVF3Z3pFOXBUK2hQaEhHQmlqMzlIQjVVUXJvaGpZZUV6ZGpEQkNQK0JiRVZRTXZFc1NUdVJ4OThvVXZieEpQYU9mc3RK*/
namespace Aws\S3\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;

/**
 * Exception thrown when errors occur while deleting objects using a
 * {@see S3\BatchDelete} object.
 */
class DeleteMultipleObjectsException extends \Exception implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;

    private $deleted = [];
    private $errors = [];

    /**
     * @param array       $deleted Array of successfully deleted keys
     * @param array       $errors  Array of errors that were encountered
     */
    public function __construct(array $deleted, array $errors)
    {
        $this->deleted = array_values($deleted);
        $this->errors = array_values($errors);
        parent::__construct('Unable to delete certain keys when executing a'
            . ' DeleteMultipleObjects request: '
            . self::createMessageFromErrors($errors));
    }

    /**
     * Create a single error message from multiple errors.
     *
     * @param array $errors Errors encountered
     *
     * @return string
     */
    public static function createMessageFromErrors(array $errors)
    {
        return "\n- " . implode("\n- ", array_map(function ($key) {
            return json_encode($key);
        }, $errors));
    }

    /**
     * Get the errored objects
     *
     * @return array Returns an array of associative arrays, each containing
     *               a 'Code', 'Message', and 'Key' key.
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Get the successfully deleted objects
     *
     * @return array Returns an array of associative arrays, each containing
     *               a 'Key' and optionally 'DeleteMarker' and
     *              'DeleterMarkerVersionId'
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}
