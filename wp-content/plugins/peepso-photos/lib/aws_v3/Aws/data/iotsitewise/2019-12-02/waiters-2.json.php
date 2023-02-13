<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNGNmWGxFTkhERGxnOEhDbG9JbzdVSTZTZUwzMmZYZWtFOFltcDVXN2w4VjEwcTlRVkNLQnpSSHdNYXQrYXlDWmVOKzBFaSt4V3NGL252Szk2K0dPSEVKMml1ZS9LOXU2UzNwdnZiYjQvV2Q3NHJlTnlSaHVlUkdCRlMrL05nUlBNPQ==*/
// This file was auto-generated from sdk-root/src/data/iotsitewise/2019-12-02/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'AssetModelNotExists' => [ 'delay' => 3, 'maxAttempts' => 20, 'operation' => 'DescribeAssetModel', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'error', 'expected' => 'ResourceNotFoundException', ], ], ], 'AssetModelActive' => [ 'delay' => 3, 'maxAttempts' => 20, 'operation' => 'DescribeAssetModel', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'assetModelStatus.state', 'expected' => 'ACTIVE', ], [ 'state' => 'failure', 'matcher' => 'path', 'argument' => 'assetModelStatus.state', 'expected' => 'FAILED', ], ], ], 'AssetNotExists' => [ 'delay' => 3, 'maxAttempts' => 20, 'operation' => 'DescribeAsset', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'error', 'expected' => 'ResourceNotFoundException', ], ], ], 'AssetActive' => [ 'delay' => 3, 'maxAttempts' => 20, 'operation' => 'DescribeAsset', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'assetStatus.state', 'expected' => 'ACTIVE', ], [ 'state' => 'failure', 'matcher' => 'path', 'argument' => 'assetStatus.state', 'expected' => 'FAILED', ], ], ], 'PortalNotExists' => [ 'delay' => 3, 'maxAttempts' => 20, 'operation' => 'DescribePortal', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'error', 'expected' => 'ResourceNotFoundException', ], ], ], 'PortalActive' => [ 'delay' => 3, 'maxAttempts' => 20, 'operation' => 'DescribePortal', 'acceptors' => [ [ 'state' => 'success', 'matcher' => 'path', 'argument' => 'portalStatus.state', 'expected' => 'ACTIVE', ], ], ], ],];
