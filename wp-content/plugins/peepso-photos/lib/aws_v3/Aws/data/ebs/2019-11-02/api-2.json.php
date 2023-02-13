<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDc2RSs5Uy9CVG5rRUVmRUMwb1NmM2EwVUM0NFA1SFFHOFZYMG14RTJmQ1lGdkg0WnVZWDQ1bENzRnVqakg1bnRhOU5BY0xPWlVzK0I4dnZhUHNyREtDdDhqaG9DdHBPOThZb1lDSWdTdGJkVXBieWtTZ1NOei9kMnBaZ01jcWpZPQ==*/
// This file was auto-generated from sdk-root/src/data/ebs/2019-11-02/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2019-11-02', 'endpointPrefix' => 'ebs', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'Amazon EBS', 'serviceFullName' => 'Amazon Elastic Block Store', 'serviceId' => 'EBS', 'signatureVersion' => 'v4', 'uid' => 'ebs-2019-11-02', ], 'operations' => [ 'CompleteSnapshot' => [ 'name' => 'CompleteSnapshot', 'http' => [ 'method' => 'POST', 'requestUri' => '/snapshots/completion/{snapshotId}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CompleteSnapshotRequest', ], 'output' => [ 'shape' => 'CompleteSnapshotResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'RequestThrottledException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetSnapshotBlock' => [ 'name' => 'GetSnapshotBlock', 'http' => [ 'method' => 'GET', 'requestUri' => '/snapshots/{snapshotId}/blocks/{blockIndex}', ], 'input' => [ 'shape' => 'GetSnapshotBlockRequest', ], 'output' => [ 'shape' => 'GetSnapshotBlockResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'RequestThrottledException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListChangedBlocks' => [ 'name' => 'ListChangedBlocks', 'http' => [ 'method' => 'GET', 'requestUri' => '/snapshots/{secondSnapshotId}/changedblocks', ], 'input' => [ 'shape' => 'ListChangedBlocksRequest', ], 'output' => [ 'shape' => 'ListChangedBlocksResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'RequestThrottledException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListSnapshotBlocks' => [ 'name' => 'ListSnapshotBlocks', 'http' => [ 'method' => 'GET', 'requestUri' => '/snapshots/{snapshotId}/blocks', ], 'input' => [ 'shape' => 'ListSnapshotBlocksRequest', ], 'output' => [ 'shape' => 'ListSnapshotBlocksResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'RequestThrottledException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'InternalServerException', ], ], ], 'PutSnapshotBlock' => [ 'name' => 'PutSnapshotBlock', 'http' => [ 'method' => 'PUT', 'requestUri' => '/snapshots/{snapshotId}/blocks/{blockIndex}', 'responseCode' => 201, ], 'input' => [ 'shape' => 'PutSnapshotBlockRequest', ], 'output' => [ 'shape' => 'PutSnapshotBlockResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'RequestThrottledException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'InternalServerException', ], ], 'authtype' => 'v4-unsigned-body', ], 'StartSnapshot' => [ 'name' => 'StartSnapshot', 'http' => [ 'method' => 'POST', 'requestUri' => '/snapshots', 'responseCode' => 201, ], 'input' => [ 'shape' => 'StartSnapshotRequest', ], 'output' => [ 'shape' => 'StartSnapshotResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'RequestThrottledException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConcurrentLimitExceededException', ], [ 'shape' => 'ConflictException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'required' => [ 'Reason', ], 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], 'Reason' => [ 'shape' => 'AccessDeniedExceptionReason', ], ], 'error' => [ 'httpStatusCode' => 403, ], 'exception' => true, ], 'AccessDeniedExceptionReason' => [ 'type' => 'string', 'enum' => [ 'UNAUTHORIZED_ACCOUNT', 'DEPENDENCY_ACCESS_DENIED', ], ], 'Block' => [ 'type' => 'structure', 'members' => [ 'BlockIndex' => [ 'shape' => 'BlockIndex', ], 'BlockToken' => [ 'shape' => 'BlockToken', ], ], ], 'BlockData' => [ 'type' => 'blob', 'sensitive' => true, 'streaming' => true, ], 'BlockIndex' => [ 'type' => 'integer', 'min' => 0, ], 'BlockSize' => [ 'type' => 'integer', ], 'BlockToken' => [ 'type' => 'string', 'max' => 256, 'pattern' => '^[A-Za-z0-9+/=]+$', ], 'Blocks' => [ 'type' => 'list', 'member' => [ 'shape' => 'Block', ], 'sensitive' => true, ], 'Boolean' => [ 'type' => 'boolean', ], 'ChangedBlock' => [ 'type' => 'structure', 'members' => [ 'BlockIndex' => [ 'shape' => 'BlockIndex', ], 'FirstBlockToken' => [ 'shape' => 'BlockToken', ], 'SecondBlockToken' => [ 'shape' => 'BlockToken', ], ], 'sensitive' => true, ], 'ChangedBlocks' => [ 'type' => 'list', 'member' => [ 'shape' => 'ChangedBlock', ], ], 'ChangedBlocksCount' => [ 'type' => 'integer', 'min' => 0, ], 'Checksum' => [ 'type' => 'string', 'max' => 64, 'pattern' => '^[A-Za-z0-9+/=]+$', ], 'ChecksumAggregationMethod' => [ 'type' => 'string', 'enum' => [ 'LINEAR', ], 'max' => 32, 'pattern' => '^[A-Za-z0-9]+$', ], 'ChecksumAlgorithm' => [ 'type' => 'string', 'enum' => [ 'SHA256', ], 'max' => 32, 'pattern' => '^[A-Za-z0-9]+$', ], 'CompleteSnapshotRequest' => [ 'type' => 'structure', 'required' => [ 'SnapshotId', 'ChangedBlocksCount', ], 'members' => [ 'SnapshotId' => [ 'shape' => 'SnapshotId', 'location' => 'uri', 'locationName' => 'snapshotId', ], 'ChangedBlocksCount' => [ 'shape' => 'ChangedBlocksCount', 'location' => 'header', 'locationName' => 'x-amz-ChangedBlocksCount', ], 'Checksum' => [ 'shape' => 'Checksum', 'location' => 'header', 'locationName' => 'x-amz-Checksum', ], 'ChecksumAlgorithm' => [ 'shape' => 'ChecksumAlgorithm', 'location' => 'header', 'locationName' => 'x-amz-Checksum-Algorithm', ], 'ChecksumAggregationMethod' => [ 'shape' => 'ChecksumAggregationMethod', 'location' => 'header', 'locationName' => 'x-amz-Checksum-Aggregation-Method', ], ], ], 'CompleteSnapshotResponse' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'Status', ], ], ], 'ConcurrentLimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'DataLength' => [ 'type' => 'integer', ], 'Description' => [ 'type' => 'string', 'max' => 255, 'pattern' => '^[\\S\\s]+$', ], 'ErrorMessage' => [ 'type' => 'string', 'max' => 256, ], 'GetSnapshotBlockRequest' => [ 'type' => 'structure', 'required' => [ 'SnapshotId', 'BlockIndex', 'BlockToken', ], 'members' => [ 'SnapshotId' => [ 'shape' => 'SnapshotId', 'location' => 'uri', 'locationName' => 'snapshotId', ], 'BlockIndex' => [ 'shape' => 'BlockIndex', 'location' => 'uri', 'locationName' => 'blockIndex', ], 'BlockToken' => [ 'shape' => 'BlockToken', 'location' => 'querystring', 'locationName' => 'blockToken', ], ], ], 'GetSnapshotBlockResponse' => [ 'type' => 'structure', 'members' => [ 'DataLength' => [ 'shape' => 'DataLength', 'location' => 'header', 'locationName' => 'x-amz-Data-Length', ], 'BlockData' => [ 'shape' => 'BlockData', ], 'Checksum' => [ 'shape' => 'Checksum', 'location' => 'header', 'locationName' => 'x-amz-Checksum', ], 'ChecksumAlgorithm' => [ 'shape' => 'ChecksumAlgorithm', 'location' => 'header', 'locationName' => 'x-amz-Checksum-Algorithm', ], ], 'payload' => 'BlockData', ], 'IdempotencyToken' => [ 'type' => 'string', 'max' => 255, 'pattern' => '^[\\S]+$', ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'KmsKeyArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => 'arn:aws[a-z\\-]*:kms:.*:[0-9]{12}:key/.*', 'sensitive' => true, ], 'ListChangedBlocksRequest' => [ 'type' => 'structure', 'required' => [ 'SecondSnapshotId', ], 'members' => [ 'FirstSnapshotId' => [ 'shape' => 'SnapshotId', 'location' => 'querystring', 'locationName' => 'firstSnapshotId', ], 'SecondSnapshotId' => [ 'shape' => 'SnapshotId', 'location' => 'uri', 'locationName' => 'secondSnapshotId', ], 'NextToken' => [ 'shape' => 'PageToken', 'location' => 'querystring', 'locationName' => 'pageToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'StartingBlockIndex' => [ 'shape' => 'BlockIndex', 'location' => 'querystring', 'locationName' => 'startingBlockIndex', ], ], ], 'ListChangedBlocksResponse' => [ 'type' => 'structure', 'members' => [ 'ChangedBlocks' => [ 'shape' => 'ChangedBlocks', ], 'ExpiryTime' => [ 'shape' => 'TimeStamp', ], 'VolumeSize' => [ 'shape' => 'VolumeSize', ], 'BlockSize' => [ 'shape' => 'BlockSize', ], 'NextToken' => [ 'shape' => 'PageToken', ], ], ], 'ListSnapshotBlocksRequest' => [ 'type' => 'structure', 'required' => [ 'SnapshotId', ], 'members' => [ 'SnapshotId' => [ 'shape' => 'SnapshotId', 'location' => 'uri', 'locationName' => 'snapshotId', ], 'NextToken' => [ 'shape' => 'PageToken', 'location' => 'querystring', 'locationName' => 'pageToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'StartingBlockIndex' => [ 'shape' => 'BlockIndex', 'location' => 'querystring', 'locationName' => 'startingBlockIndex', ], ], ], 'ListSnapshotBlocksResponse' => [ 'type' => 'structure', 'members' => [ 'Blocks' => [ 'shape' => 'Blocks', ], 'ExpiryTime' => [ 'shape' => 'TimeStamp', ], 'VolumeSize' => [ 'shape' => 'VolumeSize', ], 'BlockSize' => [ 'shape' => 'BlockSize', ], 'NextToken' => [ 'shape' => 'PageToken', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'max' => 10000, 'min' => 100, ], 'OwnerId' => [ 'type' => 'string', 'max' => 24, 'min' => 1, 'pattern' => '\\S+', ], 'PageToken' => [ 'type' => 'string', 'max' => 256, 'pattern' => '^[A-Za-z0-9+/=]+$', ], 'Progress' => [ 'type' => 'integer', 'max' => 100, 'min' => 0, ], 'PutSnapshotBlockRequest' => [ 'type' => 'structure', 'required' => [ 'SnapshotId', 'BlockIndex', 'BlockData', 'DataLength', 'Checksum', 'ChecksumAlgorithm', ], 'members' => [ 'SnapshotId' => [ 'shape' => 'SnapshotId', 'location' => 'uri', 'locationName' => 'snapshotId', ], 'BlockIndex' => [ 'shape' => 'BlockIndex', 'location' => 'uri', 'locationName' => 'blockIndex', ], 'BlockData' => [ 'shape' => 'BlockData', ], 'DataLength' => [ 'shape' => 'DataLength', 'location' => 'header', 'locationName' => 'x-amz-Data-Length', ], 'Progress' => [ 'shape' => 'Progress', 'location' => 'header', 'locationName' => 'x-amz-Progress', ], 'Checksum' => [ 'shape' => 'Checksum', 'location' => 'header', 'locationName' => 'x-amz-Checksum', ], 'ChecksumAlgorithm' => [ 'shape' => 'ChecksumAlgorithm', 'location' => 'header', 'locationName' => 'x-amz-Checksum-Algorithm', ], ], 'payload' => 'BlockData', ], 'PutSnapshotBlockResponse' => [ 'type' => 'structure', 'members' => [ 'Checksum' => [ 'shape' => 'Checksum', 'location' => 'header', 'locationName' => 'x-amz-Checksum', ], 'ChecksumAlgorithm' => [ 'shape' => 'ChecksumAlgorithm', 'location' => 'header', 'locationName' => 'x-amz-Checksum-Algorithm', ], ], ], 'RequestThrottledException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], 'Reason' => [ 'shape' => 'RequestThrottledExceptionReason', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'RequestThrottledExceptionReason' => [ 'type' => 'string', 'enum' => [ 'ACCOUNT_THROTTLED', 'DEPENDENCY_REQUEST_THROTTLED', 'RESOURCE_LEVEL_THROTTLE', ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], 'Reason' => [ 'shape' => 'ResourceNotFoundExceptionReason', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'ResourceNotFoundExceptionReason' => [ 'type' => 'string', 'enum' => [ 'SNAPSHOT_NOT_FOUND', 'DEPENDENCY_RESOURCE_NOT_FOUND', ], ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], 'Reason' => [ 'shape' => 'ServiceQuotaExceededExceptionReason', ], ], 'error' => [ 'httpStatusCode' => 402, ], 'exception' => true, ], 'ServiceQuotaExceededExceptionReason' => [ 'type' => 'string', 'enum' => [ 'DEPENDENCY_SERVICE_QUOTA_EXCEEDED', ], ], 'SnapshotId' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^snap-[0-9a-f]+$', ], 'StartSnapshotRequest' => [ 'type' => 'structure', 'required' => [ 'VolumeSize', ], 'members' => [ 'VolumeSize' => [ 'shape' => 'VolumeSize', ], 'ParentSnapshotId' => [ 'shape' => 'SnapshotId', ], 'Tags' => [ 'shape' => 'Tags', ], 'Description' => [ 'shape' => 'Description', ], 'ClientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, ], 'Encrypted' => [ 'shape' => 'Boolean', ], 'KmsKeyArn' => [ 'shape' => 'KmsKeyArn', ], 'Timeout' => [ 'shape' => 'Timeout', ], ], ], 'StartSnapshotResponse' => [ 'type' => 'structure', 'members' => [ 'Description' => [ 'shape' => 'Description', ], 'SnapshotId' => [ 'shape' => 'SnapshotId', ], 'OwnerId' => [ 'shape' => 'OwnerId', ], 'Status' => [ 'shape' => 'Status', ], 'StartTime' => [ 'shape' => 'TimeStamp', ], 'VolumeSize' => [ 'shape' => 'VolumeSize', ], 'BlockSize' => [ 'shape' => 'BlockSize', ], 'Tags' => [ 'shape' => 'Tags', ], 'ParentSnapshotId' => [ 'shape' => 'SnapshotId', ], 'KmsKeyArn' => [ 'shape' => 'KmsKeyArn', ], ], ], 'Status' => [ 'type' => 'string', 'enum' => [ 'completed', 'pending', 'error', ], 'max' => 32, ], 'Tag' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 127, 'pattern' => '^[\\S\\s]+$', ], 'TagValue' => [ 'type' => 'string', 'max' => 255, 'pattern' => '^[\\S\\s]*$', ], 'Tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ], 'TimeStamp' => [ 'type' => 'timestamp', ], 'Timeout' => [ 'type' => 'integer', 'max' => 4320, 'min' => 10, ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], 'Reason' => [ 'shape' => 'ValidationExceptionReason', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ValidationExceptionReason' => [ 'type' => 'string', 'enum' => [ 'INVALID_CUSTOMER_KEY', 'INVALID_PAGE_TOKEN', 'INVALID_BLOCK_TOKEN', 'INVALID_SNAPSHOT_ID', 'UNRELATED_SNAPSHOTS', 'INVALID_BLOCK', 'INVALID_CONTENT_ENCODING', 'INVALID_TAG', 'INVALID_DEPENDENCY_REQUEST', 'INVALID_PARAMETER_VALUE', 'INVALID_VOLUME_SIZE', 'CONFLICTING_BLOCK_UPDATE', ], ], 'VolumeSize' => [ 'type' => 'long', 'min' => 1, ], ],];
