<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNUdHRUtka2wzbUFPUk1HM3BzMWVoYTJueW82MEJkcFl3eXF2MkRpU1cxNWptblYvWHJFV0RwcTZrVnJ3UWw1YVhQTU1LWkxOODB1VTJnV0M3aW5FYzduTW51TS83NHF6OFZlY1ludml4cGV3cDExYkRHMmNucWhGNER0dG5NNTlUVTUwRGVpMG5NWUQvWDJtVlBnWk9V*/
namespace Aws\Endpoint\UseDualstackEndpoint;

interface ConfigurationInterface
{
    /**
     * Returns whether or not to use a DUALSTACK endpoint
     *
     * @return bool
     */
    public function isUseDualstackEndpoint();

    /**
     * Returns the configuration as an associative array
     *
     * @return array
     */
    public function toArray();
}
