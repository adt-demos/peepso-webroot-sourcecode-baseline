<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNnZ2VWloRStWTEZETWovRVhxMzArS1BWV2Y0R0ZhNHc2aUlKc0hJa3hNNG83YU9uZlI5OFdWZHhOMDJoNEwrSlRFaEcyT2ZUNTI4bFhBNVdDVGYvSEpuMXRtMW9kM2pLRUFNb3EwMWFzMG1UMXFOVFRXZTZtSHI5UXc3MDYrbUhnPQ==*/
// This file was auto-generated from sdk-root/src/data/devops-guru/2020-12-01/paginators-1.json
return [ 'pagination' => [ 'DescribeOrganizationResourceCollectionHealth' => [ 'input_token' => 'NextToken', 'output_token' => 'NextToken', 'result_key' => [ 'CloudFormation', 'Account', 'Service', 'Tags', ], ], 'DescribeResourceCollectionHealth' => [ 'input_token' => 'NextToken', 'output_token' => 'NextToken', 'result_key' => [ 'CloudFormation', 'Service', 'Tags', ], ], 'GetCostEstimation' => [ 'input_token' => 'NextToken', 'non_aggregate_keys' => [ 'Status', 'TotalCost', 'TimeRange', 'ResourceCollection', ], 'output_token' => 'NextToken', 'result_key' => [ 'Costs', ], ], 'GetResourceCollection' => [ 'input_token' => 'NextToken', 'non_aggregate_keys' => [ 'ResourceCollection', ], 'output_token' => 'NextToken', 'result_key' => [ 'ResourceCollection.CloudFormation.StackNames', 'ResourceCollection.Tags', ], ], 'ListAnomaliesForInsight' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxResults', 'output_token' => 'NextToken', 'result_key' => [ 'ReactiveAnomalies', 'ProactiveAnomalies', ], ], 'ListEvents' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxResults', 'output_token' => 'NextToken', 'result_key' => 'Events', ], 'ListInsights' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxResults', 'output_token' => 'NextToken', 'result_key' => [ 'ProactiveInsights', 'ReactiveInsights', ], ], 'ListNotificationChannels' => [ 'input_token' => 'NextToken', 'output_token' => 'NextToken', 'result_key' => 'Channels', ], 'ListOrganizationInsights' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxResults', 'output_token' => 'NextToken', 'result_key' => [ 'ProactiveInsights', 'ReactiveInsights', ], ], 'ListRecommendations' => [ 'input_token' => 'NextToken', 'output_token' => 'NextToken', 'result_key' => 'Recommendations', ], 'SearchInsights' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxResults', 'output_token' => 'NextToken', 'result_key' => [ 'ProactiveInsights', 'ReactiveInsights', ], ], 'SearchOrganizationInsights' => [ 'input_token' => 'NextToken', 'limit_key' => 'MaxResults', 'output_token' => 'NextToken', 'result_key' => [ 'ProactiveInsights', 'ReactiveInsights', ], ], ],];
