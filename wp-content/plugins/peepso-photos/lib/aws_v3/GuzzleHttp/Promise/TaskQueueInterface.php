<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNmNlSk56NzdCMVRUT3MvbFZSNW5NZ0hzUWcwSGpqbFJsU1Z5ajNlR01iUFRRMVFXNStPcFZnRk1oYVhBZzlsSEJhUmg4WHRPUHFBT2I2amtBNXRLRUNGbjBiWGNDTzhNbFZhaHI2ZW1ocWt3U1FPQnAwR0c0RTNhcGM1c3VSaG9FPQ==*/

namespace GuzzleHttp\Promise;

interface TaskQueueInterface
{
    /**
     * Returns true if the queue is empty.
     *
     * @return bool
     */
    public function isEmpty();

    /**
     * Adds a task to the queue that will be executed the next time run is
     * called.
     */
    public function add(callable $task);

    /**
     * Execute all of the pending task in the queue.
     */
    public function run();
}
