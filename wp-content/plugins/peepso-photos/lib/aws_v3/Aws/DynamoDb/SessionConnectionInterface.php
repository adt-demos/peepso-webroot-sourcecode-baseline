<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNjhYRkV6bTdTQW1CaTdudU94MDV1d3puZlFvR0RFZldiS01rNS9CK0hzYkFDN3QxTkMxN3VrY3ZsbXBtbHdqSDNKWklWT0pjRXBwSVA1R1BscG1vaEVFZmRLQVFySlVJTkdXRHkrbE9UNUdNU0FNeTJYdHJmYk1TVVkwWjJVaWlGQ0ZJZXB0eHR2U0tld1pBSUlNOUdp*/
namespace Aws\DynamoDb;

/**
 * The session connection provides the underlying logic for interacting with
 * Amazon DynamoDB and performs all of the reading and writing operations.
 */
interface SessionConnectionInterface
{
    /**
     * Reads session data from DynamoDB
     *
     * @param string $id Session ID
     *
     * @return array
     */
    public function read($id);

    /**
     * Writes session data to DynamoDB
     *
     * @param string $id        Session ID
     * @param string $data      Serialized session data
     * @param bool   $isChanged Whether or not the data has changed
     *
     * @return bool
     */
    public function write($id, $data, $isChanged);

    /**
     * Deletes session record from DynamoDB
     *
     * @param string $id Session ID
     *
     * @return bool
     */
    public function delete($id);

    /**
     * Performs garbage collection on the sessions stored in the DynamoDB
     *
     * @return bool
     */
    public function deleteExpired();
}
