<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNEs5QW5saEI2VnJzZWJ0UmRwT2Zmb2MxL3F0MlBtb2pSMEJhSG9ZVUVGM0lwNzhFZEdYVlJRRzBsL1ZNRFpnZklKeWNJaXhkU0RHOHNER1Z0QW13V1BpbjJUTzJqeHZDeU5aMHg5Um93OEprMW5ZVUZCZ3dycC9qYmFRdVh6cmZzPQ==*/
namespace Aws;

/**
 * Represents an AWS result object that is returned from executing an operation.
 */
interface ResultInterface extends \ArrayAccess, \IteratorAggregate, \Countable
{
    /**
     * Provides debug information about the result object
     *
     * @return string
     */
    public function __toString();

    /**
     * Convert the result to an array.
     *
     * @return array
     */
    public function toArray();

    /**
     * Check if the model contains a key by name
     *
     * @param string $name Name of the key to retrieve
     *
     * @return bool
     */
    public function hasKey($name);

    /**
     * Get a specific key value from the result model.
     *
     * @param string $key Key to retrieve.
     *
     * @return mixed|null Value of the key or NULL if not found.
     */
    public function get($key);

    /**
     * Returns the result of executing a JMESPath expression on the contents
     * of the Result model.
     *
     *     $result = $client->execute($command);
     *     $jpResult = $result->search('foo.*.bar[?baz > `10`]');
     *
     * @param string $expression JMESPath expression to execute
     *
     * @return mixed Returns the result of the JMESPath expression.
     * @link http://jmespath.readthedocs.org/en/latest/ JMESPath documentation
     */
    public function search($expression);
};
