<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNFJ3QTZrN2FFT0tuMm00UVRXR0ZDYnBuMjJZK3YvSnFaRzlVTmVIVE82RkVReXR4ZmpXckI1MjRWVGhEa1ZVN1JZbXdhdHZUcXIxbjhYdDZaMUw4UjFETjZDb2FjREZ6ZENWa1FuZlRlWHFUV240UTZTQXhGbGZzNEFLeEtYbTFRPQ==*/
namespace Aws\CodeBuild;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS CodeBuild** service.
 * @method \Aws\Result batchDeleteBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteBuildsAsync(array $args = [])
 * @method \Aws\Result batchGetBuildBatches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetBuildBatchesAsync(array $args = [])
 * @method \Aws\Result batchGetBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetBuildsAsync(array $args = [])
 * @method \Aws\Result batchGetProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetProjectsAsync(array $args = [])
 * @method \Aws\Result batchGetReportGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetReportGroupsAsync(array $args = [])
 * @method \Aws\Result batchGetReports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetReportsAsync(array $args = [])
 * @method \Aws\Result createProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \Aws\Result createReportGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReportGroupAsync(array $args = [])
 * @method \Aws\Result createWebhook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWebhookAsync(array $args = [])
 * @method \Aws\Result deleteBuildBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBuildBatchAsync(array $args = [])
 * @method \Aws\Result deleteProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \Aws\Result deleteReport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReportAsync(array $args = [])
 * @method \Aws\Result deleteReportGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReportGroupAsync(array $args = [])
 * @method \Aws\Result deleteResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \Aws\Result deleteSourceCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSourceCredentialsAsync(array $args = [])
 * @method \Aws\Result deleteWebhook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWebhookAsync(array $args = [])
 * @method \Aws\Result describeCodeCoverages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCodeCoveragesAsync(array $args = [])
 * @method \Aws\Result describeTestCases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTestCasesAsync(array $args = [])
 * @method \Aws\Result getReportGroupTrend(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReportGroupTrendAsync(array $args = [])
 * @method \Aws\Result getResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \Aws\Result importSourceCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importSourceCredentialsAsync(array $args = [])
 * @method \Aws\Result invalidateProjectCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise invalidateProjectCacheAsync(array $args = [])
 * @method \Aws\Result listBuildBatches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildBatchesAsync(array $args = [])
 * @method \Aws\Result listBuildBatchesForProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildBatchesForProjectAsync(array $args = [])
 * @method \Aws\Result listBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsAsync(array $args = [])
 * @method \Aws\Result listBuildsForProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsForProjectAsync(array $args = [])
 * @method \Aws\Result listCuratedEnvironmentImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCuratedEnvironmentImagesAsync(array $args = [])
 * @method \Aws\Result listProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \Aws\Result listReportGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReportGroupsAsync(array $args = [])
 * @method \Aws\Result listReports(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReportsAsync(array $args = [])
 * @method \Aws\Result listReportsForReportGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReportsForReportGroupAsync(array $args = [])
 * @method \Aws\Result listSharedProjects(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSharedProjectsAsync(array $args = [])
 * @method \Aws\Result listSharedReportGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSharedReportGroupsAsync(array $args = [])
 * @method \Aws\Result listSourceCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSourceCredentialsAsync(array $args = [])
 * @method \Aws\Result putResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \Aws\Result retryBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retryBuildAsync(array $args = [])
 * @method \Aws\Result retryBuildBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise retryBuildBatchAsync(array $args = [])
 * @method \Aws\Result startBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBuildAsync(array $args = [])
 * @method \Aws\Result startBuildBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startBuildBatchAsync(array $args = [])
 * @method \Aws\Result stopBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBuildAsync(array $args = [])
 * @method \Aws\Result stopBuildBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopBuildBatchAsync(array $args = [])
 * @method \Aws\Result updateProject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 * @method \Aws\Result updateProjectVisibility(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProjectVisibilityAsync(array $args = [])
 * @method \Aws\Result updateReportGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReportGroupAsync(array $args = [])
 * @method \Aws\Result updateWebhook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWebhookAsync(array $args = [])
 */
class CodeBuildClient extends AwsClient {}