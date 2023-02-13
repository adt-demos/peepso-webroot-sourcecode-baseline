<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNlQ1dnBaamQyKzMza0h4RlJ3djRXbkpqTmpTSm5KbGRzK2xzeXpGSTVNL0IvVDQyN0tSblhGd2tyNk5pQllmSUtIMU5wK2Q5T090VFNOcUtUS0s3WE9yempHUDNvS3NBNDFpM2FBL2ZzVnJCQnhBV25abUJxT09WUFg3Q2UvSHg0PQ==*/
namespace Aws;

use GuzzleHttp\Psr7\StreamDecoratorTrait;
use Psr\Http\Message\StreamInterface;

/**
 * Stream decorator that calculates a rolling hash of the stream as it is read.
 */
class HashingStream implements StreamInterface
{
    use StreamDecoratorTrait;

    /** @var HashInterface */
    private $hash;

    /** @var callable|null */
    private $callback;

    /**
     * @param StreamInterface $stream     Stream that is being read.
     * @param HashInterface   $hash       Hash used to calculate checksum.
     * @param callable        $onComplete Optional function invoked when the
     *                                    hash calculation is completed.
     */
    public function __construct(
        StreamInterface $stream,
        HashInterface $hash,
        callable $onComplete = null
    ) {
        $this->stream = $stream;
        $this->hash = $hash;
        $this->callback = $onComplete;
    }

    public function read($length)
    {
        $data = $this->stream->read($length);
        $this->hash->update($data);
        if ($this->eof()) {
            $result = $this->hash->complete();
            if ($this->callback) {
                call_user_func($this->callback, $result);
            }
        }

        return $data;
    }

    public function seek($offset, $whence = SEEK_SET)
    {
        if ($offset === 0) {
            $this->hash->reset();
            return $this->stream->seek($offset);
        }

        // Seeking arbitrarily is not supported.
        return false;
    }
}
