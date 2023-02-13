<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNGNmWGxFTkhERGxnOEhDbG9JbzdVSTZTZUwzMmZYZWtFOFltcDVXN2w4VjEwcTlRVkNLQnpSSHdNYXQrYXlDWmVOKzBFaSt4V3NGL252Szk2K0dPSEVKMml1ZS9LOXU2UzNwdnZiYjQvV2Q3NHJlTnlSaHVlUkdCRlMrL05nUlBNPQ==*/
// This file was auto-generated from sdk-root/src/data/elasticbeanstalk/2010-12-01/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'EnvironmentExists' => [ 'delay' => 20, 'maxAttempts' => 20, 'operation' => 'DescribeEnvironments', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'pathAll', 'argument' => 'Environments[].Status', 'expected' => 'Ready', ], [ 'state' => 'retry', 'matcher' => 'pathAll', 'argument' => 'Environments[].Status', 'expected' => 'Launching', ], ], ], 'EnvironmentUpdated' => [ 'delay' => 20, 'maxAttempts' => 20, 'operation' => 'DescribeEnvironments', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'pathAll', 'argument' => 'Environments[].Status', 'expected' => 'Ready', ], [ 'state' => 'retry', 'matcher' => 'pathAll', 'argument' => 'Environments[].Status', 'expected' => 'Updating', ], ], ], 'EnvironmentTerminated' => [ 'delay' => 20, 'maxAttempts' => 20, 'operation' => 'DescribeEnvironments', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'pathAll', 'argument' => 'Environments[].Status', 'expected' => 'Terminated', ], [ 'state' => 'retry', 'matcher' => 'pathAll', 'argument' => 'Environments[].Status', 'expected' => 'Terminating', ], ], ], ],];
