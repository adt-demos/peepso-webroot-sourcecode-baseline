<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDc2RSs5Uy9CVG5rRUVmRUMwb1NmM2EwVUM0NFA1SFFHOFZYMG14RTJmQ1lGdkg0WnVZWDQ1bENzRnVqakg1bnRhOU5BY0xPWlVzK0I4dnZhUHNyREtDdDhqaG9DdHBPOThZb1lDSWdTdGJkVXBieWtTZ1NOei9kMnBaZ01jcWpZPQ==*/
// This file was auto-generated from sdk-root/src/data/cognito-sync/2014-06-30/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2014-06-30', 'endpointPrefix' => 'cognito-sync', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Cognito Sync', 'serviceId' => 'Cognito Sync', 'signatureVersion' => 'v4', 'uid' => 'cognito-sync-2014-06-30', ], 'operations' => [ 'BulkPublish' => [ 'name' => 'BulkPublish', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/bulkpublish', 'responseCode' => 200, ], 'input' => [ 'shape' => 'BulkPublishRequest', ], 'output' => [ 'shape' => 'BulkPublishResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'DuplicateRequestException', ], [ 'shape' => 'AlreadyStreamedException', ], ], ], 'DeleteDataset' => [ 'name' => 'DeleteDataset', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteDatasetRequest', ], 'output' => [ 'shape' => 'DeleteDatasetResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ResourceConflictException', ], ], ], 'DescribeDataset' => [ 'name' => 'DescribeDataset', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeDatasetRequest', ], 'output' => [ 'shape' => 'DescribeDatasetResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'DescribeIdentityPoolUsage' => [ 'name' => 'DescribeIdentityPoolUsage', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeIdentityPoolUsageRequest', ], 'output' => [ 'shape' => 'DescribeIdentityPoolUsageResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'DescribeIdentityUsage' => [ 'name' => 'DescribeIdentityUsage', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeIdentityUsageRequest', ], 'output' => [ 'shape' => 'DescribeIdentityUsageResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'GetBulkPublishDetails' => [ 'name' => 'GetBulkPublishDetails', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/getBulkPublishDetails', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetBulkPublishDetailsRequest', ], 'output' => [ 'shape' => 'GetBulkPublishDetailsResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalErrorException', ], ], ], 'GetCognitoEvents' => [ 'name' => 'GetCognitoEvents', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}/events', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetCognitoEventsRequest', ], 'output' => [ 'shape' => 'GetCognitoEventsResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'GetIdentityPoolConfiguration' => [ 'name' => 'GetIdentityPoolConfiguration', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}/configuration', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetIdentityPoolConfigurationRequest', ], 'output' => [ 'shape' => 'GetIdentityPoolConfigurationResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'ListDatasets' => [ 'name' => 'ListDatasets', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDatasetsRequest', ], 'output' => [ 'shape' => 'ListDatasetsResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'ListIdentityPoolUsage' => [ 'name' => 'ListIdentityPoolUsage', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListIdentityPoolUsageRequest', ], 'output' => [ 'shape' => 'ListIdentityPoolUsageResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'ListRecords' => [ 'name' => 'ListRecords', 'http' => [ 'method' => 'GET', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}/records', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListRecordsRequest', ], 'output' => [ 'shape' => 'ListRecordsResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalErrorException', ], ], ], 'RegisterDevice' => [ 'name' => 'RegisterDevice', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/identity/{IdentityId}/device', 'responseCode' => 200, ], 'input' => [ 'shape' => 'RegisterDeviceRequest', ], 'output' => [ 'shape' => 'RegisterDeviceResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidConfigurationException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'SetCognitoEvents' => [ 'name' => 'SetCognitoEvents', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/events', 'responseCode' => 200, ], 'input' => [ 'shape' => 'SetCognitoEventsRequest', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'SetIdentityPoolConfiguration' => [ 'name' => 'SetIdentityPoolConfiguration', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/configuration', 'responseCode' => 200, ], 'input' => [ 'shape' => 'SetIdentityPoolConfigurationRequest', ], 'output' => [ 'shape' => 'SetIdentityPoolConfigurationResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'ConcurrentModificationException', ], ], ], 'SubscribeToDataset' => [ 'name' => 'SubscribeToDataset', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}/subscriptions/{DeviceId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'SubscribeToDatasetRequest', ], 'output' => [ 'shape' => 'SubscribeToDatasetResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidConfigurationException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'UnsubscribeFromDataset' => [ 'name' => 'UnsubscribeFromDataset', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}/subscriptions/{DeviceId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UnsubscribeFromDatasetRequest', ], 'output' => [ 'shape' => 'UnsubscribeFromDatasetResponse', ], 'errors' => [ [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalErrorException', ], [ 'shape' => 'InvalidConfigurationException', ], [ 'shape' => 'TooManyRequestsException', ], ], ], 'UpdateRecords' => [ 'name' => 'UpdateRecords', 'http' => [ 'method' => 'POST', 'requestUri' => '/identitypools/{IdentityPoolId}/identities/{IdentityId}/datasets/{DatasetName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateRecordsRequest', ], 'output' => [ 'shape' => 'UpdateRecordsResponse', ], 'errors' => [ [ 'shape' => 'InvalidParameterException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'NotAuthorizedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ResourceConflictException', ], [ 'shape' => 'InvalidLambdaFunctionOutputException', ], [ 'shape' => 'LambdaThrottledException', ], [ 'shape' => 'TooManyRequestsException', ], [ 'shape' => 'InternalErrorException', ], ], ], ], 'shapes' => [ 'AlreadyStreamedException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ApplicationArn' => [ 'type' => 'string', 'pattern' => 'arn:aws:sns:[-0-9a-z]+:\\d+:app/[A-Z_]+/[a-zA-Z0-9_.-]+', ], 'ApplicationArnList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ApplicationArn', ], ], 'AssumeRoleArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => 'arn:aws:iam::\\d+:role/.*', ], 'Boolean' => [ 'type' => 'boolean', ], 'BulkPublishRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], ], ], 'BulkPublishResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', ], ], ], 'BulkPublishStatus' => [ 'type' => 'string', 'enum' => [ 'NOT_STARTED', 'IN_PROGRESS', 'FAILED', 'SUCCEEDED', ], ], 'ClientContext' => [ 'type' => 'string', ], 'CognitoEventType' => [ 'type' => 'string', ], 'CognitoStreams' => [ 'type' => 'structure', 'members' => [ 'StreamName' => [ 'shape' => 'StreamName', ], 'RoleArn' => [ 'shape' => 'AssumeRoleArn', ], 'StreamingStatus' => [ 'shape' => 'StreamingStatus', ], ], ], 'ConcurrentModificationException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'Dataset' => [ 'type' => 'structure', 'members' => [ 'IdentityId' => [ 'shape' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', ], 'CreationDate' => [ 'shape' => 'Date', ], 'LastModifiedDate' => [ 'shape' => 'Date', ], 'LastModifiedBy' => [ 'shape' => 'String', ], 'DataStorage' => [ 'shape' => 'Long', ], 'NumRecords' => [ 'shape' => 'Long', ], ], ], 'DatasetList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Dataset', ], ], 'DatasetName' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[a-zA-Z0-9_.:-]+', ], 'Date' => [ 'type' => 'timestamp', ], 'DeleteDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'DatasetName', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', 'location' => 'uri', 'locationName' => 'DatasetName', ], ], ], 'DeleteDatasetResponse' => [ 'type' => 'structure', 'members' => [ 'Dataset' => [ 'shape' => 'Dataset', ], ], ], 'DescribeDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'DatasetName', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', 'location' => 'uri', 'locationName' => 'DatasetName', ], ], ], 'DescribeDatasetResponse' => [ 'type' => 'structure', 'members' => [ 'Dataset' => [ 'shape' => 'Dataset', ], ], ], 'DescribeIdentityPoolUsageRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], ], ], 'DescribeIdentityPoolUsageResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolUsage' => [ 'shape' => 'IdentityPoolUsage', ], ], ], 'DescribeIdentityUsageRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], ], ], 'DescribeIdentityUsageResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityUsage' => [ 'shape' => 'IdentityUsage', ], ], ], 'DeviceId' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'DuplicateRequestException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'Events' => [ 'type' => 'map', 'key' => [ 'shape' => 'CognitoEventType', ], 'value' => [ 'shape' => 'LambdaFunctionArn', ], 'max' => 1, ], 'ExceptionMessage' => [ 'type' => 'string', ], 'GetBulkPublishDetailsRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], ], ], 'GetBulkPublishDetailsResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', ], 'BulkPublishStartTime' => [ 'shape' => 'Date', ], 'BulkPublishCompleteTime' => [ 'shape' => 'Date', ], 'BulkPublishStatus' => [ 'shape' => 'BulkPublishStatus', ], 'FailureMessage' => [ 'shape' => 'String', ], ], ], 'GetCognitoEventsRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], ], ], 'GetCognitoEventsResponse' => [ 'type' => 'structure', 'members' => [ 'Events' => [ 'shape' => 'Events', ], ], ], 'GetIdentityPoolConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], ], ], 'GetIdentityPoolConfigurationResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', ], 'PushSync' => [ 'shape' => 'PushSync', ], 'CognitoStreams' => [ 'shape' => 'CognitoStreams', ], ], ], 'IdentityId' => [ 'type' => 'string', 'max' => 55, 'min' => 1, 'pattern' => '[\\w-]+:[0-9a-f-]+', ], 'IdentityPoolId' => [ 'type' => 'string', 'max' => 55, 'min' => 1, 'pattern' => '[\\w-]+:[0-9a-f-]+', ], 'IdentityPoolUsage' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', ], 'SyncSessionsCount' => [ 'shape' => 'Long', ], 'DataStorage' => [ 'shape' => 'Long', ], 'LastModifiedDate' => [ 'shape' => 'Date', ], ], ], 'IdentityPoolUsageList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IdentityPoolUsage', ], ], 'IdentityUsage' => [ 'type' => 'structure', 'members' => [ 'IdentityId' => [ 'shape' => 'IdentityId', ], 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', ], 'LastModifiedDate' => [ 'shape' => 'Date', ], 'DatasetCount' => [ 'shape' => 'Integer', ], 'DataStorage' => [ 'shape' => 'Long', ], ], ], 'Integer' => [ 'type' => 'integer', ], 'IntegerString' => [ 'type' => 'integer', ], 'InternalErrorException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'InvalidConfigurationException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidLambdaFunctionOutputException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidParameterException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'LambdaFunctionArn' => [ 'type' => 'string', ], 'LambdaThrottledException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'LimitExceededException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ListDatasetsRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityId', 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'NextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'MaxResults' => [ 'shape' => 'IntegerString', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListDatasetsResponse' => [ 'type' => 'structure', 'members' => [ 'Datasets' => [ 'shape' => 'DatasetList', ], 'Count' => [ 'shape' => 'Integer', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListIdentityPoolUsageRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'MaxResults' => [ 'shape' => 'IntegerString', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListIdentityPoolUsageResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolUsages' => [ 'shape' => 'IdentityPoolUsageList', ], 'MaxResults' => [ 'shape' => 'Integer', ], 'Count' => [ 'shape' => 'Integer', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListRecordsRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'DatasetName', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', 'location' => 'uri', 'locationName' => 'DatasetName', ], 'LastSyncCount' => [ 'shape' => 'Long', 'location' => 'querystring', 'locationName' => 'lastSyncCount', ], 'NextToken' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'MaxResults' => [ 'shape' => 'IntegerString', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'SyncSessionToken' => [ 'shape' => 'SyncSessionToken', 'location' => 'querystring', 'locationName' => 'syncSessionToken', ], ], ], 'ListRecordsResponse' => [ 'type' => 'structure', 'members' => [ 'Records' => [ 'shape' => 'RecordList', ], 'NextToken' => [ 'shape' => 'String', ], 'Count' => [ 'shape' => 'Integer', ], 'DatasetSyncCount' => [ 'shape' => 'Long', ], 'LastModifiedBy' => [ 'shape' => 'String', ], 'MergedDatasetNames' => [ 'shape' => 'MergedDatasetNameList', ], 'DatasetExists' => [ 'shape' => 'Boolean', ], 'DatasetDeletedAfterRequestedSyncCount' => [ 'shape' => 'Boolean', ], 'SyncSessionToken' => [ 'shape' => 'String', ], ], ], 'Long' => [ 'type' => 'long', ], 'MergedDatasetNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'NotAuthorizedException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 403, ], 'exception' => true, ], 'Operation' => [ 'type' => 'string', 'enum' => [ 'replace', 'remove', ], ], 'Platform' => [ 'type' => 'string', 'enum' => [ 'APNS', 'APNS_SANDBOX', 'GCM', 'ADM', ], ], 'PushSync' => [ 'type' => 'structure', 'members' => [ 'ApplicationArns' => [ 'shape' => 'ApplicationArnList', ], 'RoleArn' => [ 'shape' => 'AssumeRoleArn', ], ], ], 'PushToken' => [ 'type' => 'string', ], 'Record' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'RecordKey', ], 'Value' => [ 'shape' => 'RecordValue', ], 'SyncCount' => [ 'shape' => 'Long', ], 'LastModifiedDate' => [ 'shape' => 'Date', ], 'LastModifiedBy' => [ 'shape' => 'String', ], 'DeviceLastModifiedDate' => [ 'shape' => 'Date', ], ], ], 'RecordKey' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'RecordList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Record', ], ], 'RecordPatch' => [ 'type' => 'structure', 'required' => [ 'Op', 'Key', 'SyncCount', ], 'members' => [ 'Op' => [ 'shape' => 'Operation', ], 'Key' => [ 'shape' => 'RecordKey', ], 'Value' => [ 'shape' => 'RecordValue', ], 'SyncCount' => [ 'shape' => 'Long', ], 'DeviceLastModifiedDate' => [ 'shape' => 'Date', ], ], ], 'RecordPatchList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecordPatch', ], ], 'RecordValue' => [ 'type' => 'string', 'max' => 1048575, ], 'RegisterDeviceRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'Platform', 'Token', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'Platform' => [ 'shape' => 'Platform', ], 'Token' => [ 'shape' => 'PushToken', ], ], ], 'RegisterDeviceResponse' => [ 'type' => 'structure', 'members' => [ 'DeviceId' => [ 'shape' => 'DeviceId', ], ], ], 'ResourceConflictException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'SetCognitoEventsRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'Events', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'Events' => [ 'shape' => 'Events', ], ], ], 'SetIdentityPoolConfigurationRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'PushSync' => [ 'shape' => 'PushSync', ], 'CognitoStreams' => [ 'shape' => 'CognitoStreams', ], ], ], 'SetIdentityPoolConfigurationResponse' => [ 'type' => 'structure', 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', ], 'PushSync' => [ 'shape' => 'PushSync', ], 'CognitoStreams' => [ 'shape' => 'CognitoStreams', ], ], ], 'StreamName' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'StreamingStatus' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'String' => [ 'type' => 'string', ], 'SubscribeToDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'DatasetName', 'DeviceId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', 'location' => 'uri', 'locationName' => 'DatasetName', ], 'DeviceId' => [ 'shape' => 'DeviceId', 'location' => 'uri', 'locationName' => 'DeviceId', ], ], ], 'SubscribeToDatasetResponse' => [ 'type' => 'structure', 'members' => [], ], 'SyncSessionToken' => [ 'type' => 'string', ], 'TooManyRequestsException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'UnsubscribeFromDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'DatasetName', 'DeviceId', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', 'location' => 'uri', 'locationName' => 'DatasetName', ], 'DeviceId' => [ 'shape' => 'DeviceId', 'location' => 'uri', 'locationName' => 'DeviceId', ], ], ], 'UnsubscribeFromDatasetResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateRecordsRequest' => [ 'type' => 'structure', 'required' => [ 'IdentityPoolId', 'IdentityId', 'DatasetName', 'SyncSessionToken', ], 'members' => [ 'IdentityPoolId' => [ 'shape' => 'IdentityPoolId', 'location' => 'uri', 'locationName' => 'IdentityPoolId', ], 'IdentityId' => [ 'shape' => 'IdentityId', 'location' => 'uri', 'locationName' => 'IdentityId', ], 'DatasetName' => [ 'shape' => 'DatasetName', 'location' => 'uri', 'locationName' => 'DatasetName', ], 'DeviceId' => [ 'shape' => 'DeviceId', ], 'RecordPatches' => [ 'shape' => 'RecordPatchList', ], 'SyncSessionToken' => [ 'shape' => 'SyncSessionToken', ], 'ClientContext' => [ 'shape' => 'ClientContext', 'location' => 'header', 'locationName' => 'x-amz-Client-Context', ], ], ], 'UpdateRecordsResponse' => [ 'type' => 'structure', 'members' => [ 'Records' => [ 'shape' => 'RecordList', ], ], ], ],];