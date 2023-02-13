<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNGNmWGxFTkhERGxnOEhDbG9JbzdVSTZTZUwzMmZYZWtFOFltcDVXN2w4VjEwcTlRVkNLQnpSSHdNYXQrYXlDWmVOKzBFaSt4V3NGL252Szk2K0dPSEVKMml1ZS9LOXU2UzNwdnZiYjQvV2Q3NHJlTnlSaHVlUkdCRlMrL05nUlBNPQ==*/
// This file was auto-generated from sdk-root/src/data/neptune/2014-10-31/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'DBInstanceAvailable' => [ 'delay' => 30, 'operation' => 'DescribeDBInstances', 'maxAttempts' => 60, 'acceptors' => [ [ 'expected' => 'available', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'DBInstances[].DBInstanceStatus', ], [ 'expected' => 'deleted', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'DBInstances[].DBInstanceStatus', ], [ 'expected' => 'deleting', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'DBInstances[].DBInstanceStatus', ], [ 'expected' => 'failed', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'DBInstances[].DBInstanceStatus', ], [ 'expected' => 'incompatible-restore', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'DBInstances[].DBInstanceStatus', ], [ 'expected' => 'incompatible-parameters', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'DBInstances[].DBInstanceStatus', ], ], ], 'DBInstanceDeleted' => [ 'delay' => 30, 'operation' => 'DescribeDBInstances', 'maxAttempts' => 60, 'acceptors' => [ [ 'expected' => 'deleted', 'matcher' => 'pathAll', 'state' => 'success', 'argument' => 'DBInstances[].DBInstanceStatus', ], [ 'expected' => 'DBInstanceNotFound', 'matcher' => 'error', 'state' => 'success', ], [ 'expected' => 'creating', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'DBInstances[].DBInstanceStatus', ], [ 'expected' => 'modifying', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'DBInstances[].DBInstanceStatus', ], [ 'expected' => 'rebooting', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'DBInstances[].DBInstanceStatus', ], [ 'expected' => 'resetting-master-credentials', 'matcher' => 'pathAny', 'state' => 'failure', 'argument' => 'DBInstances[].DBInstanceStatus', ], ], ], ],];
