<?php
// This file was auto-generated from sdk-root/src/data/launch-wizard/2018-05-10/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-05-10', 'endpointPrefix' => 'launchwizard', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'protocols' => [ 'rest-json', ], 'serviceFullName' => 'AWS Launch Wizard', 'serviceId' => 'Launch Wizard', 'signatureVersion' => 'v4', 'signingName' => 'launchwizard', 'uid' => 'launch-wizard-2018-05-10', ], 'operations' => [ 'CreateDeployment' => [ 'name' => 'CreateDeployment', 'http' => [ 'method' => 'POST', 'requestUri' => '/createDeployment', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateDeploymentInput', ], 'output' => [ 'shape' => 'CreateDeploymentOutput', ], 'errors' => [ [ 'shape' => 'ResourceLimitException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DeleteDeployment' => [ 'name' => 'DeleteDeployment', 'http' => [ 'method' => 'POST', 'requestUri' => '/deleteDeployment', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteDeploymentInput', ], 'output' => [ 'shape' => 'DeleteDeploymentOutput', ], 'errors' => [ [ 'shape' => 'ResourceLimitException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'GetDeployment' => [ 'name' => 'GetDeployment', 'http' => [ 'method' => 'POST', 'requestUri' => '/getDeployment', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetDeploymentInput', ], 'output' => [ 'shape' => 'GetDeploymentOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetWorkload' => [ 'name' => 'GetWorkload', 'http' => [ 'method' => 'POST', 'requestUri' => '/getWorkload', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetWorkloadInput', ], 'output' => [ 'shape' => 'GetWorkloadOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetWorkloadDeploymentPattern' => [ 'name' => 'GetWorkloadDeploymentPattern', 'http' => [ 'method' => 'POST', 'requestUri' => '/getWorkloadDeploymentPattern', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetWorkloadDeploymentPatternInput', ], 'output' => [ 'shape' => 'GetWorkloadDeploymentPatternOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListDeploymentEvents' => [ 'name' => 'ListDeploymentEvents', 'http' => [ 'method' => 'POST', 'requestUri' => '/listDeploymentEvents', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDeploymentEventsInput', ], 'output' => [ 'shape' => 'ListDeploymentEventsOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListDeployments' => [ 'name' => 'ListDeployments', 'http' => [ 'method' => 'POST', 'requestUri' => '/listDeployments', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDeploymentsInput', ], 'output' => [ 'shape' => 'ListDeploymentsOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceInput', ], 'output' => [ 'shape' => 'ListTagsForResourceOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListWorkloadDeploymentPatterns' => [ 'name' => 'ListWorkloadDeploymentPatterns', 'http' => [ 'method' => 'POST', 'requestUri' => '/listWorkloadDeploymentPatterns', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListWorkloadDeploymentPatternsInput', ], 'output' => [ 'shape' => 'ListWorkloadDeploymentPatternsOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListWorkloads' => [ 'name' => 'ListWorkloads', 'http' => [ 'method' => 'POST', 'requestUri' => '/listWorkloads', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListWorkloadsInput', ], 'output' => [ 'shape' => 'ListWorkloadsOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceInput', ], 'output' => [ 'shape' => 'TagResourceOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceInput', ], 'output' => [ 'shape' => 'UntagResourceOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AllowedValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValueString', ], ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'CreateDeploymentInput' => [ 'type' => 'structure', 'required' => [ 'deploymentPatternName', 'name', 'specifications', 'workloadName', ], 'members' => [ 'deploymentPatternName' => [ 'shape' => 'DeploymentPatternName', ], 'dryRun' => [ 'shape' => 'Boolean', ], 'name' => [ 'shape' => 'DeploymentName', ], 'specifications' => [ 'shape' => 'DeploymentSpecifications', ], 'tags' => [ 'shape' => 'Tags', ], 'workloadName' => [ 'shape' => 'WorkloadName', ], ], ], 'CreateDeploymentOutput' => [ 'type' => 'structure', 'members' => [ 'deploymentId' => [ 'shape' => 'DeploymentId', ], ], ], 'DeleteDeploymentInput' => [ 'type' => 'structure', 'required' => [ 'deploymentId', ], 'members' => [ 'deploymentId' => [ 'shape' => 'DeploymentId', ], ], ], 'DeleteDeploymentOutput' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'DeploymentStatus', ], 'statusReason' => [ 'shape' => 'String', ], ], ], 'DeploymentConditionalField' => [ 'type' => 'structure', 'members' => [ 'comparator' => [ 'shape' => 'String', ], 'name' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], ], 'DeploymentData' => [ 'type' => 'structure', 'members' => [ 'createdAt' => [ 'shape' => 'Timestamp', ], 'deletedAt' => [ 'shape' => 'Timestamp', ], 'deploymentArn' => [ 'shape' => 'String', ], 'id' => [ 'shape' => 'DeploymentId', ], 'name' => [ 'shape' => 'String', ], 'patternName' => [ 'shape' => 'DeploymentPatternName', ], 'resourceGroup' => [ 'shape' => 'String', ], 'specifications' => [ 'shape' => 'DeploymentSpecifications', ], 'status' => [ 'shape' => 'DeploymentStatus', ], 'tags' => [ 'shape' => 'Tags', ], 'workloadName' => [ 'shape' => 'WorkloadName', ], ], ], 'DeploymentDataSummary' => [ 'type' => 'structure', 'members' => [ 'createdAt' => [ 'shape' => 'Timestamp', ], 'id' => [ 'shape' => 'DeploymentId', ], 'name' => [ 'shape' => 'String', ], 'patternName' => [ 'shape' => 'DeploymentPatternName', ], 'status' => [ 'shape' => 'DeploymentStatus', ], 'workloadName' => [ 'shape' => 'WorkloadName', ], ], ], 'DeploymentDataSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeploymentDataSummary', ], ], 'DeploymentEventDataSummary' => [ 'type' => 'structure', 'members' => [ 'description' => [ 'shape' => 'String', ], 'name' => [ 'shape' => 'String', ], 'status' => [ 'shape' => 'EventStatus', ], 'statusReason' => [ 'shape' => 'String', ], 'timestamp' => [ 'shape' => 'Timestamp', ], ], ], 'DeploymentEventDataSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeploymentEventDataSummary', ], ], 'DeploymentFilter' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'DeploymentFilterKey', ], 'values' => [ 'shape' => 'DeploymentFilterValues', ], ], ], 'DeploymentFilterKey' => [ 'type' => 'string', 'enum' => [ 'WORKLOAD_NAME', 'DEPLOYMENT_STATUS', ], ], 'DeploymentFilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeploymentFilter', ], 'min' => 1, ], 'DeploymentFilterValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeploymentFilterValuesMemberString', ], ], 'DeploymentFilterValuesMemberString' => [ 'type' => 'string', 'max' => 100, 'min' => 1, ], 'DeploymentId' => [ 'type' => 'string', 'max' => 128, 'min' => 2, 'pattern' => '^[a-zA-Z0-9-]+$', ], 'DeploymentName' => [ 'type' => 'string', 'max' => 50, 'min' => 1, 'pattern' => '^[A-Za-z0-9_\\.-]+$', ], 'DeploymentPatternName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^[A-Za-z0-9][a-zA-Z0-9-]*$', ], 'DeploymentSpecifications' => [ 'type' => 'map', 'key' => [ 'shape' => 'KeyString', ], 'value' => [ 'shape' => 'ValueString', ], 'max' => 100, 'min' => 1, 'sensitive' => true, ], 'DeploymentSpecificationsData' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeploymentSpecificationsField', ], 'max' => 100, 'min' => 1, ], 'DeploymentSpecificationsField' => [ 'type' => 'structure', 'members' => [ 'allowedValues' => [ 'shape' => 'AllowedValues', ], 'conditionals' => [ 'shape' => 'SpecificationsConditionalData', ], 'description' => [ 'shape' => 'String', ], 'name' => [ 'shape' => 'String', ], 'required' => [ 'shape' => 'String', ], ], ], 'DeploymentStatus' => [ 'type' => 'string', 'enum' => [ 'COMPLETED', 'CREATING', 'DELETE_IN_PROGRESS', 'DELETE_INITIATING', 'DELETE_FAILED', 'DELETED', 'FAILED', 'IN_PROGRESS', 'VALIDATING', ], ], 'EventStatus' => [ 'type' => 'string', 'enum' => [ 'CANCELED', 'CANCELING', 'COMPLETED', 'CREATED', 'FAILED', 'IN_PROGRESS', 'PENDING', 'TIMED_OUT', ], ], 'GetDeploymentInput' => [ 'type' => 'structure', 'required' => [ 'deploymentId', ], 'members' => [ 'deploymentId' => [ 'shape' => 'DeploymentId', ], ], ], 'GetDeploymentOutput' => [ 'type' => 'structure', 'members' => [ 'deployment' => [ 'shape' => 'DeploymentData', ], ], ], 'GetWorkloadDeploymentPatternInput' => [ 'type' => 'structure', 'required' => [ 'deploymentPatternName', 'workloadName', ], 'members' => [ 'deploymentPatternName' => [ 'shape' => 'DeploymentPatternName', ], 'workloadName' => [ 'shape' => 'WorkloadName', ], ], ], 'GetWorkloadDeploymentPatternOutput' => [ 'type' => 'structure', 'members' => [ 'workloadDeploymentPattern' => [ 'shape' => 'WorkloadDeploymentPatternData', ], ], ], 'GetWorkloadInput' => [ 'type' => 'structure', 'required' => [ 'workloadName', ], 'members' => [ 'workloadName' => [ 'shape' => 'WorkloadName', ], ], ], 'GetWorkloadOutput' => [ 'type' => 'structure', 'members' => [ 'workload' => [ 'shape' => 'WorkloadData', ], ], ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'KeyString' => [ 'type' => 'string', 'max' => 256, 'min' => 3, 'pattern' => '^[a-zA-Z0-9-:]+$', ], 'ListDeploymentEventsInput' => [ 'type' => 'structure', 'required' => [ 'deploymentId', ], 'members' => [ 'deploymentId' => [ 'shape' => 'DeploymentId', ], 'maxResults' => [ 'shape' => 'MaxDeploymentEventResults', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListDeploymentEventsOutput' => [ 'type' => 'structure', 'members' => [ 'deploymentEvents' => [ 'shape' => 'DeploymentEventDataSummaryList', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListDeploymentsInput' => [ 'type' => 'structure', 'members' => [ 'filters' => [ 'shape' => 'DeploymentFilterList', ], 'maxResults' => [ 'shape' => 'MaxDeploymentResults', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListDeploymentsOutput' => [ 'type' => 'structure', 'members' => [ 'deployments' => [ 'shape' => 'DeploymentDataSummaryList', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceInput' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceOutput' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'Tags', ], ], ], 'ListWorkloadDeploymentPatternsInput' => [ 'type' => 'structure', 'required' => [ 'workloadName', ], 'members' => [ 'maxResults' => [ 'shape' => 'MaxWorkloadDeploymentPatternResults', ], 'nextToken' => [ 'shape' => 'NextToken', ], 'workloadName' => [ 'shape' => 'WorkloadName', ], ], ], 'ListWorkloadDeploymentPatternsOutput' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'NextToken', ], 'workloadDeploymentPatterns' => [ 'shape' => 'WorkloadDeploymentPatternDataSummaryList', ], ], ], 'ListWorkloadsInput' => [ 'type' => 'structure', 'members' => [ 'maxResults' => [ 'shape' => 'MaxWorkloadResults', ], 'nextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListWorkloadsOutput' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'NextToken', ], 'workloads' => [ 'shape' => 'WorkloadDataSummaryList', ], ], ], 'MaxDeploymentEventResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'MaxDeploymentResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'MaxWorkloadDeploymentPatternResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'MaxWorkloadResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'NextToken' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'ResourceLimitException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'SpecificationsConditionalData' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeploymentConditionalField', ], 'max' => 5, 'min' => 1, ], 'String' => [ 'type' => 'string', ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^(?!aws:)[a-zA-Z+-=._:/]+$', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 1, ], 'TagResourceInput' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'Tags', ], ], ], 'TagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'Tags' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 200, 'min' => 1, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UntagResourceInput' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ValueString' => [ 'type' => 'string', 'max' => 1500, 'min' => 1, ], 'WorkloadData' => [ 'type' => 'structure', 'members' => [ 'description' => [ 'shape' => 'String', ], 'displayName' => [ 'shape' => 'String', ], 'documentationUrl' => [ 'shape' => 'String', ], 'iconUrl' => [ 'shape' => 'String', ], 'status' => [ 'shape' => 'WorkloadStatus', ], 'statusMessage' => [ 'shape' => 'String', ], 'workloadName' => [ 'shape' => 'WorkloadName', ], ], ], 'WorkloadDataSummary' => [ 'type' => 'structure', 'members' => [ 'displayName' => [ 'shape' => 'String', ], 'workloadName' => [ 'shape' => 'WorkloadName', ], ], ], 'WorkloadDataSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkloadDataSummary', ], ], 'WorkloadDeploymentPatternData' => [ 'type' => 'structure', 'members' => [ 'deploymentPatternName' => [ 'shape' => 'DeploymentPatternName', ], 'description' => [ 'shape' => 'String', ], 'displayName' => [ 'shape' => 'String', ], 'specifications' => [ 'shape' => 'DeploymentSpecificationsData', ], 'status' => [ 'shape' => 'WorkloadDeploymentPatternStatus', ], 'statusMessage' => [ 'shape' => 'String', ], 'workloadName' => [ 'shape' => 'WorkloadName', ], 'workloadVersionName' => [ 'shape' => 'WorkloadVersionName', ], ], ], 'WorkloadDeploymentPatternDataSummary' => [ 'type' => 'structure', 'members' => [ 'deploymentPatternName' => [ 'shape' => 'DeploymentPatternName', ], 'description' => [ 'shape' => 'String', ], 'displayName' => [ 'shape' => 'String', ], 'status' => [ 'shape' => 'WorkloadDeploymentPatternStatus', ], 'statusMessage' => [ 'shape' => 'String', ], 'workloadName' => [ 'shape' => 'WorkloadName', ], 'workloadVersionName' => [ 'shape' => 'WorkloadVersionName', ], ], ], 'WorkloadDeploymentPatternDataSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'WorkloadDeploymentPatternDataSummary', ], ], 'WorkloadDeploymentPatternStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'INACTIVE', 'DISABLED', 'DELETED', ], ], 'WorkloadName' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[A-Za-z][a-zA-Z0-9-_]*$', ], 'WorkloadStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'INACTIVE', 'DISABLED', 'DELETED', ], ], 'WorkloadVersionName' => [ 'type' => 'string', 'max' => 30, 'min' => 5, 'pattern' => '^[A-Za-z0-9][a-zA-Z0-9-]*$', ], ],];
