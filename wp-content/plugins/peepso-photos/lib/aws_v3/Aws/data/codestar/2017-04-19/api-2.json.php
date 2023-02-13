<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDc2RSs5Uy9CVG5rRUVmRUMwb1NmM2EwVUM0NFA1SFFHOFZYMG14RTJmQ1lGdkg0WnVZWDQ1bENzRnVqakg1bnRhOU5BY0xPWlVzK0I4dnZhUHNyREtDdDhqaG9DdHBPOThZb1lDSWdTdGJkVXBieWtTZ1NOei9kMnBaZ01jcWpZPQ==*/
// This file was auto-generated from sdk-root/src/data/codestar/2017-04-19/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-04-19', 'endpointPrefix' => 'codestar', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'CodeStar', 'serviceFullName' => 'AWS CodeStar', 'serviceId' => 'CodeStar', 'signatureVersion' => 'v4', 'targetPrefix' => 'CodeStar_20170419', 'uid' => 'codestar-2017-04-19', ], 'operations' => [ 'AssociateTeamMember' => [ 'name' => 'AssociateTeamMember', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AssociateTeamMemberRequest', ], 'output' => [ 'shape' => 'AssociateTeamMemberResult', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ProjectNotFoundException', ], [ 'shape' => 'TeamMemberAlreadyAssociatedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidServiceRoleException', ], [ 'shape' => 'ProjectConfigurationException', ], [ 'shape' => 'ConcurrentModificationException', ], ], ], 'CreateProject' => [ 'name' => 'CreateProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateProjectRequest', ], 'output' => [ 'shape' => 'CreateProjectResult', ], 'errors' => [ [ 'shape' => 'ProjectAlreadyExistsException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ProjectCreationFailedException', ], [ 'shape' => 'InvalidServiceRoleException', ], [ 'shape' => 'ProjectConfigurationException', ], [ 'shape' => 'ConcurrentModificationException', ], ], ], 'CreateUserProfile' => [ 'name' => 'CreateUserProfile', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateUserProfileRequest', ], 'output' => [ 'shape' => 'CreateUserProfileResult', ], 'errors' => [ [ 'shape' => 'UserProfileAlreadyExistsException', ], [ 'shape' => 'ValidationException', ], ], ], 'DeleteProject' => [ 'name' => 'DeleteProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteProjectRequest', ], 'output' => [ 'shape' => 'DeleteProjectResult', ], 'errors' => [ [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidServiceRoleException', ], ], ], 'DeleteUserProfile' => [ 'name' => 'DeleteUserProfile', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteUserProfileRequest', ], 'output' => [ 'shape' => 'DeleteUserProfileResult', ], 'errors' => [ [ 'shape' => 'ValidationException', ], ], ], 'DescribeProject' => [ 'name' => 'DescribeProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeProjectRequest', ], 'output' => [ 'shape' => 'DescribeProjectResult', ], 'errors' => [ [ 'shape' => 'ProjectNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidServiceRoleException', ], [ 'shape' => 'ProjectConfigurationException', ], [ 'shape' => 'ConcurrentModificationException', ], ], ], 'DescribeUserProfile' => [ 'name' => 'DescribeUserProfile', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeUserProfileRequest', ], 'output' => [ 'shape' => 'DescribeUserProfileResult', ], 'errors' => [ [ 'shape' => 'UserProfileNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DisassociateTeamMember' => [ 'name' => 'DisassociateTeamMember', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DisassociateTeamMemberRequest', ], 'output' => [ 'shape' => 'DisassociateTeamMemberResult', ], 'errors' => [ [ 'shape' => 'ProjectNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidServiceRoleException', ], [ 'shape' => 'ConcurrentModificationException', ], ], ], 'ListProjects' => [ 'name' => 'ListProjects', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListProjectsRequest', ], 'output' => [ 'shape' => 'ListProjectsResult', ], 'errors' => [ [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListResources' => [ 'name' => 'ListResources', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListResourcesRequest', ], 'output' => [ 'shape' => 'ListResourcesResult', ], 'errors' => [ [ 'shape' => 'ProjectNotFoundException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListTagsForProject' => [ 'name' => 'ListTagsForProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForProjectRequest', ], 'output' => [ 'shape' => 'ListTagsForProjectResult', ], 'errors' => [ [ 'shape' => 'ProjectNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'ListTeamMembers' => [ 'name' => 'ListTeamMembers', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTeamMembersRequest', ], 'output' => [ 'shape' => 'ListTeamMembersResult', ], 'errors' => [ [ 'shape' => 'ProjectNotFoundException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListUserProfiles' => [ 'name' => 'ListUserProfiles', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListUserProfilesRequest', ], 'output' => [ 'shape' => 'ListUserProfilesResult', ], 'errors' => [ [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ValidationException', ], ], ], 'TagProject' => [ 'name' => 'TagProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagProjectRequest', ], 'output' => [ 'shape' => 'TagProjectResult', ], 'errors' => [ [ 'shape' => 'ProjectNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ConcurrentModificationException', ], ], ], 'UntagProject' => [ 'name' => 'UntagProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagProjectRequest', ], 'output' => [ 'shape' => 'UntagProjectResult', ], 'errors' => [ [ 'shape' => 'ProjectNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ConcurrentModificationException', ], ], ], 'UpdateProject' => [ 'name' => 'UpdateProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateProjectRequest', ], 'output' => [ 'shape' => 'UpdateProjectResult', ], 'errors' => [ [ 'shape' => 'ProjectNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'UpdateTeamMember' => [ 'name' => 'UpdateTeamMember', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateTeamMemberRequest', ], 'output' => [ 'shape' => 'UpdateTeamMemberResult', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ProjectNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidServiceRoleException', ], [ 'shape' => 'ProjectConfigurationException', ], [ 'shape' => 'ConcurrentModificationException', ], [ 'shape' => 'TeamMemberNotFoundException', ], ], ], 'UpdateUserProfile' => [ 'name' => 'UpdateUserProfile', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateUserProfileRequest', ], 'output' => [ 'shape' => 'UpdateUserProfileResult', ], 'errors' => [ [ 'shape' => 'UserProfileNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], ], 'shapes' => [ 'AssociateTeamMemberRequest' => [ 'type' => 'structure', 'required' => [ 'projectId', 'userArn', 'projectRole', ], 'members' => [ 'projectId' => [ 'shape' => 'ProjectId', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], 'userArn' => [ 'shape' => 'UserArn', ], 'projectRole' => [ 'shape' => 'Role', ], 'remoteAccessAllowed' => [ 'shape' => 'RemoteAccessAllowed', 'box' => true, ], ], ], 'AssociateTeamMemberResult' => [ 'type' => 'structure', 'members' => [ 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], ], ], 'BucketKey' => [ 'type' => 'string', ], 'BucketName' => [ 'type' => 'string', 'max' => 63, 'min' => 3, ], 'ClientRequestToken' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^[\\w:/-]+$', ], 'Code' => [ 'type' => 'structure', 'required' => [ 'source', 'destination', ], 'members' => [ 'source' => [ 'shape' => 'CodeSource', ], 'destination' => [ 'shape' => 'CodeDestination', ], ], ], 'CodeCommitCodeDestination' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'RepositoryName', ], ], ], 'CodeDestination' => [ 'type' => 'structure', 'members' => [ 'codeCommit' => [ 'shape' => 'CodeCommitCodeDestination', ], 'gitHub' => [ 'shape' => 'GitHubCodeDestination', ], ], ], 'CodeSource' => [ 'type' => 'structure', 'required' => [ 's3', ], 'members' => [ 's3' => [ 'shape' => 'S3Location', ], ], ], 'ConcurrentModificationException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'CreateProjectRequest' => [ 'type' => 'structure', 'required' => [ 'name', 'id', ], 'members' => [ 'name' => [ 'shape' => 'ProjectName', ], 'id' => [ 'shape' => 'ProjectId', ], 'description' => [ 'shape' => 'ProjectDescription', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], 'sourceCode' => [ 'shape' => 'SourceCode', ], 'toolchain' => [ 'shape' => 'Toolchain', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'CreateProjectResult' => [ 'type' => 'structure', 'required' => [ 'id', 'arn', ], 'members' => [ 'id' => [ 'shape' => 'ProjectId', ], 'arn' => [ 'shape' => 'ProjectArn', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], 'projectTemplateId' => [ 'shape' => 'ProjectTemplateId', ], ], ], 'CreateUserProfileRequest' => [ 'type' => 'structure', 'required' => [ 'userArn', 'displayName', 'emailAddress', ], 'members' => [ 'userArn' => [ 'shape' => 'UserArn', ], 'displayName' => [ 'shape' => 'UserProfileDisplayName', ], 'emailAddress' => [ 'shape' => 'Email', ], 'sshPublicKey' => [ 'shape' => 'SshPublicKey', ], ], ], 'CreateUserProfileResult' => [ 'type' => 'structure', 'required' => [ 'userArn', ], 'members' => [ 'userArn' => [ 'shape' => 'UserArn', ], 'displayName' => [ 'shape' => 'UserProfileDisplayName', ], 'emailAddress' => [ 'shape' => 'Email', ], 'sshPublicKey' => [ 'shape' => 'SshPublicKey', ], 'createdTimestamp' => [ 'shape' => 'CreatedTimestamp', ], 'lastModifiedTimestamp' => [ 'shape' => 'LastModifiedTimestamp', ], ], ], 'CreatedTimestamp' => [ 'type' => 'timestamp', ], 'DeleteProjectRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'ProjectId', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], 'deleteStack' => [ 'shape' => 'DeleteStack', ], ], ], 'DeleteProjectResult' => [ 'type' => 'structure', 'members' => [ 'stackId' => [ 'shape' => 'StackId', ], 'projectArn' => [ 'shape' => 'ProjectArn', ], ], ], 'DeleteStack' => [ 'type' => 'boolean', ], 'DeleteUserProfileRequest' => [ 'type' => 'structure', 'required' => [ 'userArn', ], 'members' => [ 'userArn' => [ 'shape' => 'UserArn', ], ], ], 'DeleteUserProfileResult' => [ 'type' => 'structure', 'required' => [ 'userArn', ], 'members' => [ 'userArn' => [ 'shape' => 'UserArn', ], ], ], 'DescribeProjectRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'ProjectId', ], ], ], 'DescribeProjectResult' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'ProjectName', ], 'id' => [ 'shape' => 'ProjectId', ], 'arn' => [ 'shape' => 'ProjectArn', ], 'description' => [ 'shape' => 'ProjectDescription', ], 'clientRequestToken' => [ 'shape' => 'ClientRequestToken', ], 'createdTimeStamp' => [ 'shape' => 'CreatedTimestamp', ], 'stackId' => [ 'shape' => 'StackId', ], 'projectTemplateId' => [ 'shape' => 'ProjectTemplateId', ], 'status' => [ 'shape' => 'ProjectStatus', ], ], ], 'DescribeUserProfileRequest' => [ 'type' => 'structure', 'required' => [ 'userArn', ], 'members' => [ 'userArn' => [ 'shape' => 'UserArn', ], ], ], 'DescribeUserProfileResult' => [ 'type' => 'structure', 'required' => [ 'userArn', 'createdTimestamp', 'lastModifiedTimestamp', ], 'members' => [ 'userArn' => [ 'shape' => 'UserArn', ], 'displayName' => [ 'shape' => 'UserProfileDisplayName', ], 'emailAddress' => [ 'shape' => 'Email', ], 'sshPublicKey' => [ 'shape' => 'SshPublicKey', ], 'createdTimestamp' => [ 'shape' => 'CreatedTimestamp', ], 'lastModifiedTimestamp' => [ 'shape' => 'LastModifiedTimestamp', ], ], ], 'DisassociateTeamMemberRequest' => [ 'type' => 'structure', 'required' => [ 'projectId', 'userArn', ], 'members' => [ 'projectId' => [ 'shape' => 'ProjectId', ], 'userArn' => [ 'shape' => 'UserArn', ], ], ], 'DisassociateTeamMemberResult' => [ 'type' => 'structure', 'members' => [], ], 'Email' => [ 'type' => 'string', 'max' => 128, 'min' => 3, 'pattern' => '^[\\w-.+]+@[\\w-.+]+$', 'sensitive' => true, ], 'GitHubCodeDestination' => [ 'type' => 'structure', 'required' => [ 'name', 'type', 'owner', 'privateRepository', 'issuesEnabled', 'token', ], 'members' => [ 'name' => [ 'shape' => 'RepositoryName', ], 'description' => [ 'shape' => 'RepositoryDescription', ], 'type' => [ 'shape' => 'RepositoryType', ], 'owner' => [ 'shape' => 'RepositoryOwner', ], 'privateRepository' => [ 'shape' => 'RepositoryIsPrivate', ], 'issuesEnabled' => [ 'shape' => 'RepositoryEnableIssues', ], 'token' => [ 'shape' => 'GitHubPersonalToken', ], ], ], 'GitHubPersonalToken' => [ 'type' => 'string', 'min' => 1, 'sensitive' => true, ], 'InvalidNextTokenException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'InvalidServiceRoleException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'LastModifiedTimestamp' => [ 'type' => 'timestamp', ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ListProjectsRequest' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'maxResults' => [ 'shape' => 'MaxResults', 'box' => true, ], ], ], 'ListProjectsResult' => [ 'type' => 'structure', 'required' => [ 'projects', ], 'members' => [ 'projects' => [ 'shape' => 'ProjectsList', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListResourcesRequest' => [ 'type' => 'structure', 'required' => [ 'projectId', ], 'members' => [ 'projectId' => [ 'shape' => 'ProjectId', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], 'maxResults' => [ 'shape' => 'MaxResults', 'box' => true, ], ], ], 'ListResourcesResult' => [ 'type' => 'structure', 'members' => [ 'resources' => [ 'shape' => 'ResourcesResult', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListTagsForProjectRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'ProjectId', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], 'maxResults' => [ 'shape' => 'MaxResults', 'box' => true, ], ], ], 'ListTagsForProjectResult' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'Tags', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListTeamMembersRequest' => [ 'type' => 'structure', 'required' => [ 'projectId', ], 'members' => [ 'projectId' => [ 'shape' => 'ProjectId', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], 'maxResults' => [ 'shape' => 'MaxResults', 'box' => true, ], ], ], 'ListTeamMembersResult' => [ 'type' => 'structure', 'required' => [ 'teamMembers', ], 'members' => [ 'teamMembers' => [ 'shape' => 'TeamMemberResult', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListUserProfilesRequest' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'maxResults' => [ 'shape' => 'MaxResults', 'box' => true, ], ], ], 'ListUserProfilesResult' => [ 'type' => 'structure', 'required' => [ 'userProfiles', ], 'members' => [ 'userProfiles' => [ 'shape' => 'UserProfilesList', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'PaginationToken' => [ 'type' => 'string', 'max' => 512, 'min' => 1, 'pattern' => '^[\\w/+=]+$', ], 'ProjectAlreadyExistsException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ProjectArn' => [ 'type' => 'string', 'pattern' => '^arn:aws[^:\\s]*:codestar:[^:\\s]+:[0-9]{12}:project\\/[a-z]([a-z0-9|-])+$', ], 'ProjectConfigurationException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ProjectCreationFailedException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ProjectDescription' => [ 'type' => 'string', 'max' => 1024, 'pattern' => '^$|^\\S(.*\\S)?$', 'sensitive' => true, ], 'ProjectId' => [ 'type' => 'string', 'max' => 15, 'min' => 2, 'pattern' => '^[a-z][a-z0-9-]+$', ], 'ProjectName' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^\\S(.*\\S)?$', 'sensitive' => true, ], 'ProjectNotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ProjectStatus' => [ 'type' => 'structure', 'required' => [ 'state', ], 'members' => [ 'state' => [ 'shape' => 'State', ], 'reason' => [ 'shape' => 'Reason', ], ], ], 'ProjectSummary' => [ 'type' => 'structure', 'members' => [ 'projectId' => [ 'shape' => 'ProjectId', ], 'projectArn' => [ 'shape' => 'ProjectArn', ], ], ], 'ProjectTemplateId' => [ 'type' => 'string', 'min' => 1, 'pattern' => '^arn:aws[^:\\s]{0,5}:codestar:[^:\\s]+::project-template(\\/(github|codecommit))?\\/[a-z0-9-]+$', ], 'ProjectsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProjectSummary', ], ], 'Reason' => [ 'type' => 'string', 'max' => 1024, 'pattern' => '^$|^\\S(.*\\S)?$', ], 'RemoteAccessAllowed' => [ 'type' => 'boolean', ], 'RepositoryDescription' => [ 'type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '^\\S(.*\\S)?$', ], 'RepositoryEnableIssues' => [ 'type' => 'boolean', ], 'RepositoryIsPrivate' => [ 'type' => 'boolean', ], 'RepositoryName' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^\\S[\\w.-]*$', ], 'RepositoryOwner' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^\\S(.*\\S)?$', ], 'RepositoryType' => [ 'type' => 'string', 'pattern' => '^(user|organization|User|Organization)$', ], 'Resource' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'ResourceId', ], ], ], 'ResourceId' => [ 'type' => 'string', 'min' => 11, 'pattern' => '^arn\\:aws\\:\\S.*\\:.*', ], 'ResourcesResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ], 'Role' => [ 'type' => 'string', 'pattern' => '^(Owner|Viewer|Contributor)$', ], 'RoleArn' => [ 'type' => 'string', 'max' => 1224, 'min' => 1, ], 'S3Location' => [ 'type' => 'structure', 'members' => [ 'bucketName' => [ 'shape' => 'BucketName', ], 'bucketKey' => [ 'shape' => 'BucketKey', ], ], ], 'SourceCode' => [ 'type' => 'list', 'member' => [ 'shape' => 'Code', ], ], 'SshPublicKey' => [ 'type' => 'string', 'max' => 16384, 'pattern' => '^[\\t\\r\\n\\u0020-\\u00FF]*$', ], 'StackId' => [ 'type' => 'string', 'pattern' => '^arn:aws[^:\\s]*:cloudformation:[^:\\s]+:[0-9]{12}:stack\\/[^:\\s]+\\/[^:\\s]+$', ], 'State' => [ 'type' => 'string', 'pattern' => '^(CreateInProgress|CreateComplete|CreateFailed|DeleteComplete|DeleteFailed|DeleteInProgress|UpdateComplete|UpdateInProgress|UpdateFailed|Unknown)$', ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'TagKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], ], 'TagProjectRequest' => [ 'type' => 'structure', 'required' => [ 'id', 'tags', ], 'members' => [ 'id' => [ 'shape' => 'ProjectId', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'TagProjectResult' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'Tags', ], ], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'Tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], ], 'TeamMember' => [ 'type' => 'structure', 'required' => [ 'userArn', 'projectRole', ], 'members' => [ 'userArn' => [ 'shape' => 'UserArn', ], 'projectRole' => [ 'shape' => 'Role', ], 'remoteAccessAllowed' => [ 'shape' => 'RemoteAccessAllowed', 'box' => true, ], ], ], 'TeamMemberAlreadyAssociatedException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'TeamMemberNotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'TeamMemberResult' => [ 'type' => 'list', 'member' => [ 'shape' => 'TeamMember', ], ], 'TemplateParameterKey' => [ 'type' => 'string', 'max' => 30, 'min' => 1, 'pattern' => '^\\S(.*\\S)?$', ], 'TemplateParameterMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TemplateParameterKey', ], 'value' => [ 'shape' => 'TemplateParameterValue', ], 'max' => 25, ], 'TemplateParameterValue' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^\\S(.*\\S)?$', 'sensitive' => true, ], 'Toolchain' => [ 'type' => 'structure', 'required' => [ 'source', ], 'members' => [ 'source' => [ 'shape' => 'ToolchainSource', ], 'roleArn' => [ 'shape' => 'RoleArn', ], 'stackParameters' => [ 'shape' => 'TemplateParameterMap', ], ], ], 'ToolchainSource' => [ 'type' => 'structure', 'required' => [ 's3', ], 'members' => [ 's3' => [ 'shape' => 'S3Location', ], ], ], 'UntagProjectRequest' => [ 'type' => 'structure', 'required' => [ 'id', 'tags', ], 'members' => [ 'id' => [ 'shape' => 'ProjectId', ], 'tags' => [ 'shape' => 'TagKeys', ], ], ], 'UntagProjectResult' => [ 'type' => 'structure', 'members' => [], ], 'UpdateProjectRequest' => [ 'type' => 'structure', 'required' => [ 'id', ], 'members' => [ 'id' => [ 'shape' => 'ProjectId', ], 'name' => [ 'shape' => 'ProjectName', ], 'description' => [ 'shape' => 'ProjectDescription', ], ], ], 'UpdateProjectResult' => [ 'type' => 'structure', 'members' => [], ], 'UpdateTeamMemberRequest' => [ 'type' => 'structure', 'required' => [ 'projectId', 'userArn', ], 'members' => [ 'projectId' => [ 'shape' => 'ProjectId', ], 'userArn' => [ 'shape' => 'UserArn', ], 'projectRole' => [ 'shape' => 'Role', ], 'remoteAccessAllowed' => [ 'shape' => 'RemoteAccessAllowed', 'box' => true, ], ], ], 'UpdateTeamMemberResult' => [ 'type' => 'structure', 'members' => [ 'userArn' => [ 'shape' => 'UserArn', ], 'projectRole' => [ 'shape' => 'Role', ], 'remoteAccessAllowed' => [ 'shape' => 'RemoteAccessAllowed', 'box' => true, ], ], ], 'UpdateUserProfileRequest' => [ 'type' => 'structure', 'required' => [ 'userArn', ], 'members' => [ 'userArn' => [ 'shape' => 'UserArn', ], 'displayName' => [ 'shape' => 'UserProfileDisplayName', ], 'emailAddress' => [ 'shape' => 'Email', ], 'sshPublicKey' => [ 'shape' => 'SshPublicKey', ], ], ], 'UpdateUserProfileResult' => [ 'type' => 'structure', 'required' => [ 'userArn', ], 'members' => [ 'userArn' => [ 'shape' => 'UserArn', ], 'displayName' => [ 'shape' => 'UserProfileDisplayName', ], 'emailAddress' => [ 'shape' => 'Email', ], 'sshPublicKey' => [ 'shape' => 'SshPublicKey', ], 'createdTimestamp' => [ 'shape' => 'CreatedTimestamp', ], 'lastModifiedTimestamp' => [ 'shape' => 'LastModifiedTimestamp', ], ], ], 'UserArn' => [ 'type' => 'string', 'max' => 95, 'min' => 32, 'pattern' => '^arn:aws:iam::\\d{12}:user(?:(\\u002F)|(\\u002F[\\u0021-\\u007E]+\\u002F))[\\w+=,.@-]+$', ], 'UserProfileAlreadyExistsException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'UserProfileDisplayName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^\\S(.*\\S)?$', 'sensitive' => true, ], 'UserProfileNotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'UserProfileSummary' => [ 'type' => 'structure', 'members' => [ 'userArn' => [ 'shape' => 'UserArn', ], 'displayName' => [ 'shape' => 'UserProfileDisplayName', ], 'emailAddress' => [ 'shape' => 'Email', ], 'sshPublicKey' => [ 'shape' => 'SshPublicKey', ], ], ], 'UserProfilesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserProfileSummary', ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], ],];
