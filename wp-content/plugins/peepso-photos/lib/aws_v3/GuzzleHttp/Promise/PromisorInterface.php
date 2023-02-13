<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNEYrQTJXT1ZWL1Z3TkdUdllncFZSTGlRd2U2SGtad2RGRS9LRHdtVnFDZHZtL2Qzclh3NThxWXFJSXlmOGlraWVMbFI5NUUrUmxLYmVBdHNGaUNGYlllRENjSGk0NFdHVlk5WTN6U0hWM2NkcjV6c1p2b21hZnFncUVkSzBzR3YwPQ==*/

namespace GuzzleHttp\Promise;

/**
 * Interface used with classes that return a promise.
 */
interface PromisorInterface
{
    /**
     * Returns a promise.
     *
     * @return PromiseInterface
     */
    public function promise();
}
