<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN3pXZVpLUVZab1RqSkNvcERjblZ3VERJQnVZU0h6OXZKbjlVcTNGQW96OGttNjVaNXU1WXErcXptSGtyUTZOUVlaUWpoQUFuWlNtMUNvUjAraWxKd0drUGp0YW5idWlIQ1dYaUtsMkozQVYvd050eTdneUY3aTMyVm02cWNJMzUwPQ==*/
namespace Aws;

/**
 * Interface that allows implementing various incremental hashes.
 */
interface HashInterface
{
    /**
     * Adds data to the hash.
     *
     * @param string $data Data to add to the hash
     */
    public function update($data);

    /**
     * Finalizes the incremental hash and returns the resulting digest.
     *
     * @return string
     */
    public function complete();

    /**
     * Removes all data from the hash, effectively starting a new hash.
     */
    public function reset();
}
