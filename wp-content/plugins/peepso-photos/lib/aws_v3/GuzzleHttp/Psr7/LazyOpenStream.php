<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN2VZcHgzWlRidHg5cHZla3FrZTAvSXZsUVZpa3g4V0QyUk9Ka1V1eGZlQ0ViTXA3ZWpjNXBlcy9ld3pnT0Y2ay9GN2RNT2k2QnJaRkpQZXZ4RlgvUmRSYlBsZG1WcGF6czB4OXVQUjN1VE5lMkVMTUx4MmVCZnNFUkJraGRtY2FRPQ==*/

namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Lazily reads or writes to a file that is opened only after an IO operation
 * take place on the stream.
 *
 * @final
 */
class LazyOpenStream implements StreamInterface
{
    use StreamDecoratorTrait;

    /** @var string File to open */
    private $filename;

    /** @var string */
    private $mode;

    /**
     * @param string $filename File to lazily open
     * @param string $mode     fopen mode to use when opening the stream
     */
    public function __construct($filename, $mode)
    {
        $this->filename = $filename;
        $this->mode = $mode;
    }

    /**
     * Creates the underlying stream lazily when required.
     *
     * @return StreamInterface
     */
    protected function createStream()
    {
        return Utils::streamFor(Utils::tryFopen($this->filename, $this->mode));
    }
}
