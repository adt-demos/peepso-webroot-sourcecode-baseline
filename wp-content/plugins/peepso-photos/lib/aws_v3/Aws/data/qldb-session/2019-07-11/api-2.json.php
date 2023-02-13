<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDc2RSs5Uy9CVG5rRUVmRUMwb1NmM2EwVUM0NFA1SFFHOFZYMG14RTJmQ1lGdkg0WnVZWDQ1bENzRnVqakg1bnRhOU5BY0xPWlVzK0I4dnZhUHNyREtDdDhqaG9DdHBPOThZb1lDSWdTdGJkVXBieWtTZ1NOei9kMnBaZ01jcWpZPQ==*/
// This file was auto-generated from sdk-root/src/data/qldb-session/2019-07-11/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2019-07-11', 'endpointPrefix' => 'session.qldb', 'jsonVersion' => '1.0', 'protocol' => 'json', 'serviceAbbreviation' => 'QLDB Session', 'serviceFullName' => 'Amazon QLDB Session', 'serviceId' => 'QLDB Session', 'signatureVersion' => 'v4', 'signingName' => 'qldb', 'targetPrefix' => 'QLDBSession', 'uid' => 'qldb-session-2019-07-11', ], 'operations' => [ 'SendCommand' => [ 'name' => 'SendCommand', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SendCommandRequest', ], 'output' => [ 'shape' => 'SendCommandResult', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InvalidSessionException', ], [ 'shape' => 'OccConflictException', ], [ 'shape' => 'RateExceededException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'CapacityExceededException', ], ], ], ], 'shapes' => [ 'AbortTransactionRequest' => [ 'type' => 'structure', 'members' => [], ], 'AbortTransactionResult' => [ 'type' => 'structure', 'members' => [ 'TimingInformation' => [ 'shape' => 'TimingInformation', ], ], ], 'BadRequestException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], 'Code' => [ 'shape' => 'ErrorCode', ], ], 'exception' => true, ], 'CapacityExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'CommitDigest' => [ 'type' => 'blob', ], 'CommitTransactionRequest' => [ 'type' => 'structure', 'required' => [ 'TransactionId', 'CommitDigest', ], 'members' => [ 'TransactionId' => [ 'shape' => 'TransactionId', ], 'CommitDigest' => [ 'shape' => 'CommitDigest', ], ], ], 'CommitTransactionResult' => [ 'type' => 'structure', 'members' => [ 'TransactionId' => [ 'shape' => 'TransactionId', ], 'CommitDigest' => [ 'shape' => 'CommitDigest', ], 'TimingInformation' => [ 'shape' => 'TimingInformation', ], 'ConsumedIOs' => [ 'shape' => 'IOUsage', ], ], ], 'EndSessionRequest' => [ 'type' => 'structure', 'members' => [], ], 'EndSessionResult' => [ 'type' => 'structure', 'members' => [ 'TimingInformation' => [ 'shape' => 'TimingInformation', ], ], ], 'ErrorCode' => [ 'type' => 'string', ], 'ErrorMessage' => [ 'type' => 'string', ], 'ExecuteStatementRequest' => [ 'type' => 'structure', 'required' => [ 'TransactionId', 'Statement', ], 'members' => [ 'TransactionId' => [ 'shape' => 'TransactionId', ], 'Statement' => [ 'shape' => 'Statement', ], 'Parameters' => [ 'shape' => 'StatementParameters', ], ], ], 'ExecuteStatementResult' => [ 'type' => 'structure', 'members' => [ 'FirstPage' => [ 'shape' => 'Page', ], 'TimingInformation' => [ 'shape' => 'TimingInformation', ], 'ConsumedIOs' => [ 'shape' => 'IOUsage', ], ], ], 'FetchPageRequest' => [ 'type' => 'structure', 'required' => [ 'TransactionId', 'NextPageToken', ], 'members' => [ 'TransactionId' => [ 'shape' => 'TransactionId', ], 'NextPageToken' => [ 'shape' => 'PageToken', ], ], ], 'FetchPageResult' => [ 'type' => 'structure', 'members' => [ 'Page' => [ 'shape' => 'Page', ], 'TimingInformation' => [ 'shape' => 'TimingInformation', ], 'ConsumedIOs' => [ 'shape' => 'IOUsage', ], ], ], 'IOUsage' => [ 'type' => 'structure', 'members' => [ 'ReadIOs' => [ 'shape' => 'ReadIOs', ], 'WriteIOs' => [ 'shape' => 'WriteIOs', ], ], ], 'InvalidSessionException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], 'Code' => [ 'shape' => 'ErrorCode', ], ], 'exception' => true, ], 'IonBinary' => [ 'type' => 'blob', 'max' => 131072, 'min' => 1, ], 'IonText' => [ 'type' => 'string', 'max' => 1048576, 'min' => 1, ], 'LedgerName' => [ 'type' => 'string', 'max' => 32, 'min' => 1, 'pattern' => '(?!^.*--)(?!^[0-9]+$)(?!^-)(?!.*-$)^[A-Za-z0-9-]+$', ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'OccConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Page' => [ 'type' => 'structure', 'members' => [ 'Values' => [ 'shape' => 'ValueHolders', ], 'NextPageToken' => [ 'shape' => 'PageToken', ], ], ], 'PageToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 4, 'pattern' => '^[A-Za-z-0-9+/=]+$', ], 'ProcessingTimeMilliseconds' => [ 'type' => 'long', ], 'RateExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ReadIOs' => [ 'type' => 'long', ], 'SendCommandRequest' => [ 'type' => 'structure', 'members' => [ 'SessionToken' => [ 'shape' => 'SessionToken', ], 'StartSession' => [ 'shape' => 'StartSessionRequest', ], 'StartTransaction' => [ 'shape' => 'StartTransactionRequest', ], 'EndSession' => [ 'shape' => 'EndSessionRequest', ], 'CommitTransaction' => [ 'shape' => 'CommitTransactionRequest', ], 'AbortTransaction' => [ 'shape' => 'AbortTransactionRequest', ], 'ExecuteStatement' => [ 'shape' => 'ExecuteStatementRequest', ], 'FetchPage' => [ 'shape' => 'FetchPageRequest', ], ], ], 'SendCommandResult' => [ 'type' => 'structure', 'members' => [ 'StartSession' => [ 'shape' => 'StartSessionResult', ], 'StartTransaction' => [ 'shape' => 'StartTransactionResult', ], 'EndSession' => [ 'shape' => 'EndSessionResult', ], 'CommitTransaction' => [ 'shape' => 'CommitTransactionResult', ], 'AbortTransaction' => [ 'shape' => 'AbortTransactionResult', ], 'ExecuteStatement' => [ 'shape' => 'ExecuteStatementResult', ], 'FetchPage' => [ 'shape' => 'FetchPageResult', ], ], ], 'SessionToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 4, 'pattern' => '^[A-Za-z-0-9+/=]+$', ], 'StartSessionRequest' => [ 'type' => 'structure', 'required' => [ 'LedgerName', ], 'members' => [ 'LedgerName' => [ 'shape' => 'LedgerName', ], ], ], 'StartSessionResult' => [ 'type' => 'structure', 'members' => [ 'SessionToken' => [ 'shape' => 'SessionToken', ], 'TimingInformation' => [ 'shape' => 'TimingInformation', ], ], ], 'StartTransactionRequest' => [ 'type' => 'structure', 'members' => [], ], 'StartTransactionResult' => [ 'type' => 'structure', 'members' => [ 'TransactionId' => [ 'shape' => 'TransactionId', ], 'TimingInformation' => [ 'shape' => 'TimingInformation', ], ], ], 'Statement' => [ 'type' => 'string', 'max' => 100000, 'min' => 1, ], 'StatementParameters' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValueHolder', ], ], 'TimingInformation' => [ 'type' => 'structure', 'members' => [ 'ProcessingTimeMilliseconds' => [ 'shape' => 'ProcessingTimeMilliseconds', ], ], ], 'TransactionId' => [ 'type' => 'string', 'max' => 22, 'min' => 22, 'pattern' => '^[A-Za-z-0-9]+$', ], 'ValueHolder' => [ 'type' => 'structure', 'members' => [ 'IonBinary' => [ 'shape' => 'IonBinary', ], 'IonText' => [ 'shape' => 'IonText', ], ], ], 'ValueHolders' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValueHolder', ], ], 'WriteIOs' => [ 'type' => 'long', ], ],];
