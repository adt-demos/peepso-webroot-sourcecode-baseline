<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDc2RSs5Uy9CVG5rRUVmRUMwb1NmM2EwVUM0NFA1SFFHOFZYMG14RTJmQ1lGdkg0WnVZWDQ1bENzRnVqakg1bnRhOU5BY0xPWlVzK0I4dnZhUHNyREtDdDhqaG9DdHBPOThZb1lDSWdTdGJkVXBieWtTZ1NOei9kMnBaZ01jcWpZPQ==*/
// This file was auto-generated from sdk-root/src/data/cloudsearch/2013-01-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2013-01-01', 'endpointPrefix' => 'cloudsearch', 'protocol' => 'query', 'serviceFullName' => 'Amazon CloudSearch', 'serviceId' => 'CloudSearch', 'signatureVersion' => 'v4', 'uid' => 'cloudsearch-2013-01-01', 'xmlNamespace' => 'http://cloudsearch.amazonaws.com/doc/2013-01-01/', ], 'operations' => [ 'BuildSuggesters' => [ 'name' => 'BuildSuggesters', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BuildSuggestersRequest', ], 'output' => [ 'shape' => 'BuildSuggestersResponse', 'resultWrapper' => 'BuildSuggestersResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'CreateDomain' => [ 'name' => 'CreateDomain', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateDomainRequest', ], 'output' => [ 'shape' => 'CreateDomainResponse', 'resultWrapper' => 'CreateDomainResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], [ 'shape' => 'ValidationException', ], ], ], 'DefineAnalysisScheme' => [ 'name' => 'DefineAnalysisScheme', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DefineAnalysisSchemeRequest', ], 'output' => [ 'shape' => 'DefineAnalysisSchemeResponse', 'resultWrapper' => 'DefineAnalysisSchemeResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DefineExpression' => [ 'name' => 'DefineExpression', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DefineExpressionRequest', ], 'output' => [ 'shape' => 'DefineExpressionResponse', 'resultWrapper' => 'DefineExpressionResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DefineIndexField' => [ 'name' => 'DefineIndexField', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DefineIndexFieldRequest', ], 'output' => [ 'shape' => 'DefineIndexFieldResponse', 'resultWrapper' => 'DefineIndexFieldResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DefineSuggester' => [ 'name' => 'DefineSuggester', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DefineSuggesterRequest', ], 'output' => [ 'shape' => 'DefineSuggesterResponse', 'resultWrapper' => 'DefineSuggesterResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DeleteAnalysisScheme' => [ 'name' => 'DeleteAnalysisScheme', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteAnalysisSchemeRequest', ], 'output' => [ 'shape' => 'DeleteAnalysisSchemeResponse', 'resultWrapper' => 'DeleteAnalysisSchemeResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DeleteDomain' => [ 'name' => 'DeleteDomain', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteDomainRequest', ], 'output' => [ 'shape' => 'DeleteDomainResponse', 'resultWrapper' => 'DeleteDomainResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], ], ], 'DeleteExpression' => [ 'name' => 'DeleteExpression', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteExpressionRequest', ], 'output' => [ 'shape' => 'DeleteExpressionResponse', 'resultWrapper' => 'DeleteExpressionResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DeleteIndexField' => [ 'name' => 'DeleteIndexField', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteIndexFieldRequest', ], 'output' => [ 'shape' => 'DeleteIndexFieldResponse', 'resultWrapper' => 'DeleteIndexFieldResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DeleteSuggester' => [ 'name' => 'DeleteSuggester', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteSuggesterRequest', ], 'output' => [ 'shape' => 'DeleteSuggesterResponse', 'resultWrapper' => 'DeleteSuggesterResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DescribeAnalysisSchemes' => [ 'name' => 'DescribeAnalysisSchemes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAnalysisSchemesRequest', ], 'output' => [ 'shape' => 'DescribeAnalysisSchemesResponse', 'resultWrapper' => 'DescribeAnalysisSchemesResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DescribeAvailabilityOptions' => [ 'name' => 'DescribeAvailabilityOptions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAvailabilityOptionsRequest', ], 'output' => [ 'shape' => 'DescribeAvailabilityOptionsResponse', 'resultWrapper' => 'DescribeAvailabilityOptionsResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'DisabledOperationException', ], ], ], 'DescribeDomainEndpointOptions' => [ 'name' => 'DescribeDomainEndpointOptions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeDomainEndpointOptionsRequest', ], 'output' => [ 'shape' => 'DescribeDomainEndpointOptionsResponse', 'resultWrapper' => 'DescribeDomainEndpointOptionsResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'DisabledOperationException', ], ], ], 'DescribeDomains' => [ 'name' => 'DescribeDomains', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeDomainsRequest', ], 'output' => [ 'shape' => 'DescribeDomainsResponse', 'resultWrapper' => 'DescribeDomainsResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], ], ], 'DescribeExpressions' => [ 'name' => 'DescribeExpressions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeExpressionsRequest', ], 'output' => [ 'shape' => 'DescribeExpressionsResponse', 'resultWrapper' => 'DescribeExpressionsResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DescribeIndexFields' => [ 'name' => 'DescribeIndexFields', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeIndexFieldsRequest', ], 'output' => [ 'shape' => 'DescribeIndexFieldsResponse', 'resultWrapper' => 'DescribeIndexFieldsResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DescribeScalingParameters' => [ 'name' => 'DescribeScalingParameters', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeScalingParametersRequest', ], 'output' => [ 'shape' => 'DescribeScalingParametersResponse', 'resultWrapper' => 'DescribeScalingParametersResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DescribeServiceAccessPolicies' => [ 'name' => 'DescribeServiceAccessPolicies', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeServiceAccessPoliciesRequest', ], 'output' => [ 'shape' => 'DescribeServiceAccessPoliciesResponse', 'resultWrapper' => 'DescribeServiceAccessPoliciesResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DescribeSuggesters' => [ 'name' => 'DescribeSuggesters', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeSuggestersRequest', ], 'output' => [ 'shape' => 'DescribeSuggestersResponse', 'resultWrapper' => 'DescribeSuggestersResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'IndexDocuments' => [ 'name' => 'IndexDocuments', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'IndexDocumentsRequest', ], 'output' => [ 'shape' => 'IndexDocumentsResponse', 'resultWrapper' => 'IndexDocumentsResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListDomainNames' => [ 'name' => 'ListDomainNames', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'output' => [ 'shape' => 'ListDomainNamesResponse', 'resultWrapper' => 'ListDomainNamesResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], ], ], 'UpdateAvailabilityOptions' => [ 'name' => 'UpdateAvailabilityOptions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateAvailabilityOptionsRequest', ], 'output' => [ 'shape' => 'UpdateAvailabilityOptionsResponse', 'resultWrapper' => 'UpdateAvailabilityOptionsResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'DisabledOperationException', ], [ 'shape' => 'ValidationException', ], ], ], 'UpdateDomainEndpointOptions' => [ 'name' => 'UpdateDomainEndpointOptions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateDomainEndpointOptionsRequest', ], 'output' => [ 'shape' => 'UpdateDomainEndpointOptionsResponse', 'resultWrapper' => 'UpdateDomainEndpointOptionsResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'DisabledOperationException', ], [ 'shape' => 'ValidationException', ], ], ], 'UpdateScalingParameters' => [ 'name' => 'UpdateScalingParameters', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateScalingParametersRequest', ], 'output' => [ 'shape' => 'UpdateScalingParametersResponse', 'resultWrapper' => 'UpdateScalingParametersResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'ValidationException', ], ], ], 'UpdateServiceAccessPolicies' => [ 'name' => 'UpdateServiceAccessPolicies', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateServiceAccessPoliciesRequest', ], 'output' => [ 'shape' => 'UpdateServiceAccessPoliciesResponse', 'resultWrapper' => 'UpdateServiceAccessPoliciesResult', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'ValidationException', ], ], ], ], 'shapes' => [ 'APIVersion' => [ 'type' => 'string', ], 'ARN' => [ 'type' => 'string', ], 'AccessPoliciesStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'PolicyDocument', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'AlgorithmicStemming' => [ 'type' => 'string', 'enum' => [ 'none', 'minimal', 'light', 'full', ], ], 'AnalysisOptions' => [ 'type' => 'structure', 'members' => [ 'Synonyms' => [ 'shape' => 'String', ], 'Stopwords' => [ 'shape' => 'String', ], 'StemmingDictionary' => [ 'shape' => 'String', ], 'JapaneseTokenizationDictionary' => [ 'shape' => 'String', ], 'AlgorithmicStemming' => [ 'shape' => 'AlgorithmicStemming', ], ], ], 'AnalysisScheme' => [ 'type' => 'structure', 'required' => [ 'AnalysisSchemeName', 'AnalysisSchemeLanguage', ], 'members' => [ 'AnalysisSchemeName' => [ 'shape' => 'StandardName', ], 'AnalysisSchemeLanguage' => [ 'shape' => 'AnalysisSchemeLanguage', ], 'AnalysisOptions' => [ 'shape' => 'AnalysisOptions', ], ], ], 'AnalysisSchemeLanguage' => [ 'type' => 'string', 'enum' => [ 'ar', 'bg', 'ca', 'cs', 'da', 'de', 'el', 'en', 'es', 'eu', 'fa', 'fi', 'fr', 'ga', 'gl', 'he', 'hi', 'hu', 'hy', 'id', 'it', 'ja', 'ko', 'lv', 'mul', 'nl', 'no', 'pt', 'ro', 'ru', 'sv', 'th', 'tr', 'zh-Hans', 'zh-Hant', ], ], 'AnalysisSchemeStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'AnalysisScheme', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'AnalysisSchemeStatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AnalysisSchemeStatus', ], ], 'AvailabilityOptionsStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'MultiAZ', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'BaseException' => [ 'type' => 'structure', 'members' => [ 'Code' => [ 'shape' => 'ErrorCode', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Boolean' => [ 'type' => 'boolean', ], 'BuildSuggestersRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], ], ], 'BuildSuggestersResponse' => [ 'type' => 'structure', 'members' => [ 'FieldNames' => [ 'shape' => 'FieldNameList', ], ], ], 'CreateDomainRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], ], ], 'CreateDomainResponse' => [ 'type' => 'structure', 'members' => [ 'DomainStatus' => [ 'shape' => 'DomainStatus', ], ], ], 'DateArrayOptions' => [ 'type' => 'structure', 'members' => [ 'DefaultValue' => [ 'shape' => 'FieldValue', ], 'SourceFields' => [ 'shape' => 'FieldNameCommaList', ], 'FacetEnabled' => [ 'shape' => 'Boolean', ], 'SearchEnabled' => [ 'shape' => 'Boolean', ], 'ReturnEnabled' => [ 'shape' => 'Boolean', ], ], ], 'DateOptions' => [ 'type' => 'structure', 'members' => [ 'DefaultValue' => [ 'shape' => 'FieldValue', ], 'SourceField' => [ 'shape' => 'FieldName', ], 'FacetEnabled' => [ 'shape' => 'Boolean', ], 'SearchEnabled' => [ 'shape' => 'Boolean', ], 'ReturnEnabled' => [ 'shape' => 'Boolean', ], 'SortEnabled' => [ 'shape' => 'Boolean', ], ], ], 'DefineAnalysisSchemeRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'AnalysisScheme', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'AnalysisScheme' => [ 'shape' => 'AnalysisScheme', ], ], ], 'DefineAnalysisSchemeResponse' => [ 'type' => 'structure', 'required' => [ 'AnalysisScheme', ], 'members' => [ 'AnalysisScheme' => [ 'shape' => 'AnalysisSchemeStatus', ], ], ], 'DefineExpressionRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'Expression', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'Expression' => [ 'shape' => 'Expression', ], ], ], 'DefineExpressionResponse' => [ 'type' => 'structure', 'required' => [ 'Expression', ], 'members' => [ 'Expression' => [ 'shape' => 'ExpressionStatus', ], ], ], 'DefineIndexFieldRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'IndexField', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'IndexField' => [ 'shape' => 'IndexField', ], ], ], 'DefineIndexFieldResponse' => [ 'type' => 'structure', 'required' => [ 'IndexField', ], 'members' => [ 'IndexField' => [ 'shape' => 'IndexFieldStatus', ], ], ], 'DefineSuggesterRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'Suggester', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'Suggester' => [ 'shape' => 'Suggester', ], ], ], 'DefineSuggesterResponse' => [ 'type' => 'structure', 'required' => [ 'Suggester', ], 'members' => [ 'Suggester' => [ 'shape' => 'SuggesterStatus', ], ], ], 'DeleteAnalysisSchemeRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'AnalysisSchemeName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'AnalysisSchemeName' => [ 'shape' => 'StandardName', ], ], ], 'DeleteAnalysisSchemeResponse' => [ 'type' => 'structure', 'required' => [ 'AnalysisScheme', ], 'members' => [ 'AnalysisScheme' => [ 'shape' => 'AnalysisSchemeStatus', ], ], ], 'DeleteDomainRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], ], ], 'DeleteDomainResponse' => [ 'type' => 'structure', 'members' => [ 'DomainStatus' => [ 'shape' => 'DomainStatus', ], ], ], 'DeleteExpressionRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'ExpressionName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'ExpressionName' => [ 'shape' => 'StandardName', ], ], ], 'DeleteExpressionResponse' => [ 'type' => 'structure', 'required' => [ 'Expression', ], 'members' => [ 'Expression' => [ 'shape' => 'ExpressionStatus', ], ], ], 'DeleteIndexFieldRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'IndexFieldName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'IndexFieldName' => [ 'shape' => 'DynamicFieldName', ], ], ], 'DeleteIndexFieldResponse' => [ 'type' => 'structure', 'required' => [ 'IndexField', ], 'members' => [ 'IndexField' => [ 'shape' => 'IndexFieldStatus', ], ], ], 'DeleteSuggesterRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'SuggesterName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'SuggesterName' => [ 'shape' => 'StandardName', ], ], ], 'DeleteSuggesterResponse' => [ 'type' => 'structure', 'required' => [ 'Suggester', ], 'members' => [ 'Suggester' => [ 'shape' => 'SuggesterStatus', ], ], ], 'DescribeAnalysisSchemesRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'AnalysisSchemeNames' => [ 'shape' => 'StandardNameList', ], 'Deployed' => [ 'shape' => 'Boolean', ], ], ], 'DescribeAnalysisSchemesResponse' => [ 'type' => 'structure', 'required' => [ 'AnalysisSchemes', ], 'members' => [ 'AnalysisSchemes' => [ 'shape' => 'AnalysisSchemeStatusList', ], ], ], 'DescribeAvailabilityOptionsRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'Deployed' => [ 'shape' => 'Boolean', ], ], ], 'DescribeAvailabilityOptionsResponse' => [ 'type' => 'structure', 'members' => [ 'AvailabilityOptions' => [ 'shape' => 'AvailabilityOptionsStatus', ], ], ], 'DescribeDomainEndpointOptionsRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'Deployed' => [ 'shape' => 'Boolean', ], ], ], 'DescribeDomainEndpointOptionsResponse' => [ 'type' => 'structure', 'members' => [ 'DomainEndpointOptions' => [ 'shape' => 'DomainEndpointOptionsStatus', ], ], ], 'DescribeDomainsRequest' => [ 'type' => 'structure', 'members' => [ 'DomainNames' => [ 'shape' => 'DomainNameList', ], ], ], 'DescribeDomainsResponse' => [ 'type' => 'structure', 'required' => [ 'DomainStatusList', ], 'members' => [ 'DomainStatusList' => [ 'shape' => 'DomainStatusList', ], ], ], 'DescribeExpressionsRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'ExpressionNames' => [ 'shape' => 'StandardNameList', ], 'Deployed' => [ 'shape' => 'Boolean', ], ], ], 'DescribeExpressionsResponse' => [ 'type' => 'structure', 'required' => [ 'Expressions', ], 'members' => [ 'Expressions' => [ 'shape' => 'ExpressionStatusList', ], ], ], 'DescribeIndexFieldsRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'FieldNames' => [ 'shape' => 'DynamicFieldNameList', ], 'Deployed' => [ 'shape' => 'Boolean', ], ], ], 'DescribeIndexFieldsResponse' => [ 'type' => 'structure', 'required' => [ 'IndexFields', ], 'members' => [ 'IndexFields' => [ 'shape' => 'IndexFieldStatusList', ], ], ], 'DescribeScalingParametersRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], ], ], 'DescribeScalingParametersResponse' => [ 'type' => 'structure', 'required' => [ 'ScalingParameters', ], 'members' => [ 'ScalingParameters' => [ 'shape' => 'ScalingParametersStatus', ], ], ], 'DescribeServiceAccessPoliciesRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'Deployed' => [ 'shape' => 'Boolean', ], ], ], 'DescribeServiceAccessPoliciesResponse' => [ 'type' => 'structure', 'required' => [ 'AccessPolicies', ], 'members' => [ 'AccessPolicies' => [ 'shape' => 'AccessPoliciesStatus', ], ], ], 'DescribeSuggestersRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'SuggesterNames' => [ 'shape' => 'StandardNameList', ], 'Deployed' => [ 'shape' => 'Boolean', ], ], ], 'DescribeSuggestersResponse' => [ 'type' => 'structure', 'required' => [ 'Suggesters', ], 'members' => [ 'Suggesters' => [ 'shape' => 'SuggesterStatusList', ], ], ], 'DisabledOperationException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'DisabledAction', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'DocumentSuggesterOptions' => [ 'type' => 'structure', 'required' => [ 'SourceField', ], 'members' => [ 'SourceField' => [ 'shape' => 'FieldName', ], 'FuzzyMatching' => [ 'shape' => 'SuggesterFuzzyMatching', ], 'SortExpression' => [ 'shape' => 'String', ], ], ], 'DomainEndpointOptions' => [ 'type' => 'structure', 'members' => [ 'EnforceHTTPS' => [ 'shape' => 'Boolean', ], 'TLSSecurityPolicy' => [ 'shape' => 'TLSSecurityPolicy', ], ], ], 'DomainEndpointOptionsStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'DomainEndpointOptions', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'DomainId' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'DomainName' => [ 'type' => 'string', 'max' => 28, 'min' => 3, 'pattern' => '[a-z][a-z0-9\\-]+', ], 'DomainNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainName', ], ], 'DomainNameMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'DomainName', ], 'value' => [ 'shape' => 'APIVersion', ], ], 'DomainStatus' => [ 'type' => 'structure', 'required' => [ 'DomainId', 'DomainName', 'RequiresIndexDocuments', ], 'members' => [ 'DomainId' => [ 'shape' => 'DomainId', ], 'DomainName' => [ 'shape' => 'DomainName', ], 'ARN' => [ 'shape' => 'ARN', ], 'Created' => [ 'shape' => 'Boolean', ], 'Deleted' => [ 'shape' => 'Boolean', ], 'DocService' => [ 'shape' => 'ServiceEndpoint', ], 'SearchService' => [ 'shape' => 'ServiceEndpoint', ], 'RequiresIndexDocuments' => [ 'shape' => 'Boolean', ], 'Processing' => [ 'shape' => 'Boolean', ], 'SearchInstanceType' => [ 'shape' => 'SearchInstanceType', ], 'SearchPartitionCount' => [ 'shape' => 'PartitionCount', ], 'SearchInstanceCount' => [ 'shape' => 'InstanceCount', ], 'Limits' => [ 'shape' => 'Limits', ], ], ], 'DomainStatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainStatus', ], ], 'Double' => [ 'type' => 'double', ], 'DoubleArrayOptions' => [ 'type' => 'structure', 'members' => [ 'DefaultValue' => [ 'shape' => 'Double', ], 'SourceFields' => [ 'shape' => 'FieldNameCommaList', ], 'FacetEnabled' => [ 'shape' => 'Boolean', ], 'SearchEnabled' => [ 'shape' => 'Boolean', ], 'ReturnEnabled' => [ 'shape' => 'Boolean', ], ], ], 'DoubleOptions' => [ 'type' => 'structure', 'members' => [ 'DefaultValue' => [ 'shape' => 'Double', ], 'SourceField' => [ 'shape' => 'FieldName', ], 'FacetEnabled' => [ 'shape' => 'Boolean', ], 'SearchEnabled' => [ 'shape' => 'Boolean', ], 'ReturnEnabled' => [ 'shape' => 'Boolean', ], 'SortEnabled' => [ 'shape' => 'Boolean', ], ], ], 'DynamicFieldName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '([a-z][a-z0-9_]*\\*?|\\*[a-z0-9_]*)', ], 'DynamicFieldNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DynamicFieldName', ], ], 'ErrorCode' => [ 'type' => 'string', ], 'ErrorMessage' => [ 'type' => 'string', ], 'Expression' => [ 'type' => 'structure', 'required' => [ 'ExpressionName', 'ExpressionValue', ], 'members' => [ 'ExpressionName' => [ 'shape' => 'StandardName', ], 'ExpressionValue' => [ 'shape' => 'ExpressionValue', ], ], ], 'ExpressionStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'Expression', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'ExpressionStatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ExpressionStatus', ], ], 'ExpressionValue' => [ 'type' => 'string', 'max' => 10240, 'min' => 1, ], 'FieldName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[a-z][a-z0-9_]*', ], 'FieldNameCommaList' => [ 'type' => 'string', 'pattern' => '\\s*[a-z*][a-z0-9_]*\\*?\\s*(,\\s*[a-z*][a-z0-9_]*\\*?\\s*)*', ], 'FieldNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'FieldName', ], ], 'FieldValue' => [ 'type' => 'string', 'max' => 1024, 'min' => 0, ], 'IndexDocumentsRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], ], ], 'IndexDocumentsResponse' => [ 'type' => 'structure', 'members' => [ 'FieldNames' => [ 'shape' => 'FieldNameList', ], ], ], 'IndexField' => [ 'type' => 'structure', 'required' => [ 'IndexFieldName', 'IndexFieldType', ], 'members' => [ 'IndexFieldName' => [ 'shape' => 'DynamicFieldName', ], 'IndexFieldType' => [ 'shape' => 'IndexFieldType', ], 'IntOptions' => [ 'shape' => 'IntOptions', ], 'DoubleOptions' => [ 'shape' => 'DoubleOptions', ], 'LiteralOptions' => [ 'shape' => 'LiteralOptions', ], 'TextOptions' => [ 'shape' => 'TextOptions', ], 'DateOptions' => [ 'shape' => 'DateOptions', ], 'LatLonOptions' => [ 'shape' => 'LatLonOptions', ], 'IntArrayOptions' => [ 'shape' => 'IntArrayOptions', ], 'DoubleArrayOptions' => [ 'shape' => 'DoubleArrayOptions', ], 'LiteralArrayOptions' => [ 'shape' => 'LiteralArrayOptions', ], 'TextArrayOptions' => [ 'shape' => 'TextArrayOptions', ], 'DateArrayOptions' => [ 'shape' => 'DateArrayOptions', ], ], ], 'IndexFieldStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'IndexField', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'IndexFieldStatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IndexFieldStatus', ], ], 'IndexFieldType' => [ 'type' => 'string', 'enum' => [ 'int', 'double', 'literal', 'text', 'date', 'latlon', 'int-array', 'double-array', 'literal-array', 'text-array', 'date-array', ], ], 'InstanceCount' => [ 'type' => 'integer', 'min' => 1, ], 'IntArrayOptions' => [ 'type' => 'structure', 'members' => [ 'DefaultValue' => [ 'shape' => 'Long', ], 'SourceFields' => [ 'shape' => 'FieldNameCommaList', ], 'FacetEnabled' => [ 'shape' => 'Boolean', ], 'SearchEnabled' => [ 'shape' => 'Boolean', ], 'ReturnEnabled' => [ 'shape' => 'Boolean', ], ], ], 'IntOptions' => [ 'type' => 'structure', 'members' => [ 'DefaultValue' => [ 'shape' => 'Long', ], 'SourceField' => [ 'shape' => 'FieldName', ], 'FacetEnabled' => [ 'shape' => 'Boolean', ], 'SearchEnabled' => [ 'shape' => 'Boolean', ], 'ReturnEnabled' => [ 'shape' => 'Boolean', ], 'SortEnabled' => [ 'shape' => 'Boolean', ], ], ], 'InternalException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InternalException', 'httpStatusCode' => 500, ], 'exception' => true, ], 'InvalidTypeException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'InvalidType', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'LatLonOptions' => [ 'type' => 'structure', 'members' => [ 'DefaultValue' => [ 'shape' => 'FieldValue', ], 'SourceField' => [ 'shape' => 'FieldName', ], 'FacetEnabled' => [ 'shape' => 'Boolean', ], 'SearchEnabled' => [ 'shape' => 'Boolean', ], 'ReturnEnabled' => [ 'shape' => 'Boolean', ], 'SortEnabled' => [ 'shape' => 'Boolean', ], ], ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'LimitExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'Limits' => [ 'type' => 'structure', 'required' => [ 'MaximumReplicationCount', 'MaximumPartitionCount', ], 'members' => [ 'MaximumReplicationCount' => [ 'shape' => 'MaximumReplicationCount', ], 'MaximumPartitionCount' => [ 'shape' => 'MaximumPartitionCount', ], ], ], 'ListDomainNamesResponse' => [ 'type' => 'structure', 'members' => [ 'DomainNames' => [ 'shape' => 'DomainNameMap', ], ], ], 'LiteralArrayOptions' => [ 'type' => 'structure', 'members' => [ 'DefaultValue' => [ 'shape' => 'FieldValue', ], 'SourceFields' => [ 'shape' => 'FieldNameCommaList', ], 'FacetEnabled' => [ 'shape' => 'Boolean', ], 'SearchEnabled' => [ 'shape' => 'Boolean', ], 'ReturnEnabled' => [ 'shape' => 'Boolean', ], ], ], 'LiteralOptions' => [ 'type' => 'structure', 'members' => [ 'DefaultValue' => [ 'shape' => 'FieldValue', ], 'SourceField' => [ 'shape' => 'FieldName', ], 'FacetEnabled' => [ 'shape' => 'Boolean', ], 'SearchEnabled' => [ 'shape' => 'Boolean', ], 'ReturnEnabled' => [ 'shape' => 'Boolean', ], 'SortEnabled' => [ 'shape' => 'Boolean', ], ], ], 'Long' => [ 'type' => 'long', ], 'MaximumPartitionCount' => [ 'type' => 'integer', 'min' => 1, ], 'MaximumReplicationCount' => [ 'type' => 'integer', 'min' => 1, ], 'MultiAZ' => [ 'type' => 'boolean', ], 'OptionState' => [ 'type' => 'string', 'enum' => [ 'RequiresIndexDocuments', 'Processing', 'Active', 'FailedToValidate', ], ], 'OptionStatus' => [ 'type' => 'structure', 'required' => [ 'CreationDate', 'UpdateDate', 'State', ], 'members' => [ 'CreationDate' => [ 'shape' => 'UpdateTimestamp', ], 'UpdateDate' => [ 'shape' => 'UpdateTimestamp', ], 'UpdateVersion' => [ 'shape' => 'UIntValue', ], 'State' => [ 'shape' => 'OptionState', ], 'PendingDeletion' => [ 'shape' => 'Boolean', ], ], ], 'PartitionCount' => [ 'type' => 'integer', 'min' => 1, ], 'PartitionInstanceType' => [ 'type' => 'string', 'enum' => [ 'search.m1.small', 'search.m1.large', 'search.m2.xlarge', 'search.m2.2xlarge', 'search.m3.medium', 'search.m3.large', 'search.m3.xlarge', 'search.m3.2xlarge', 'search.small', 'search.medium', 'search.large', 'search.xlarge', 'search.2xlarge', 'search.previousgeneration.small', 'search.previousgeneration.large', 'search.previousgeneration.xlarge', 'search.previousgeneration.2xlarge', ], ], 'PolicyDocument' => [ 'type' => 'string', ], 'ResourceAlreadyExistsException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'ResourceAlreadyExists', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'code' => 'ResourceNotFound', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'ScalingParameters' => [ 'type' => 'structure', 'members' => [ 'DesiredInstanceType' => [ 'shape' => 'PartitionInstanceType', ], 'DesiredReplicationCount' => [ 'shape' => 'UIntValue', ], 'DesiredPartitionCount' => [ 'shape' => 'UIntValue', ], ], ], 'ScalingParametersStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'ScalingParameters', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'SearchInstanceType' => [ 'type' => 'string', ], 'ServiceEndpoint' => [ 'type' => 'structure', 'members' => [ 'Endpoint' => [ 'shape' => 'ServiceUrl', ], ], ], 'ServiceUrl' => [ 'type' => 'string', ], 'StandardName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[a-z][a-z0-9_]*', ], 'StandardNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StandardName', ], ], 'String' => [ 'type' => 'string', ], 'Suggester' => [ 'type' => 'structure', 'required' => [ 'SuggesterName', 'DocumentSuggesterOptions', ], 'members' => [ 'SuggesterName' => [ 'shape' => 'StandardName', ], 'DocumentSuggesterOptions' => [ 'shape' => 'DocumentSuggesterOptions', ], ], ], 'SuggesterFuzzyMatching' => [ 'type' => 'string', 'enum' => [ 'none', 'low', 'high', ], ], 'SuggesterStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'Suggester', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'SuggesterStatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SuggesterStatus', ], ], 'TLSSecurityPolicy' => [ 'type' => 'string', 'enum' => [ 'Policy-Min-TLS-1-0-2019-07', 'Policy-Min-TLS-1-2-2019-07', ], ], 'TextArrayOptions' => [ 'type' => 'structure', 'members' => [ 'DefaultValue' => [ 'shape' => 'FieldValue', ], 'SourceFields' => [ 'shape' => 'FieldNameCommaList', ], 'ReturnEnabled' => [ 'shape' => 'Boolean', ], 'HighlightEnabled' => [ 'shape' => 'Boolean', ], 'AnalysisScheme' => [ 'shape' => 'Word', ], ], ], 'TextOptions' => [ 'type' => 'structure', 'members' => [ 'DefaultValue' => [ 'shape' => 'FieldValue', ], 'SourceField' => [ 'shape' => 'FieldName', ], 'ReturnEnabled' => [ 'shape' => 'Boolean', ], 'SortEnabled' => [ 'shape' => 'Boolean', ], 'HighlightEnabled' => [ 'shape' => 'Boolean', ], 'AnalysisScheme' => [ 'shape' => 'Word', ], ], ], 'UIntValue' => [ 'type' => 'integer', 'min' => 0, ], 'UpdateAvailabilityOptionsRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'MultiAZ', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'MultiAZ' => [ 'shape' => 'Boolean', ], ], ], 'UpdateAvailabilityOptionsResponse' => [ 'type' => 'structure', 'members' => [ 'AvailabilityOptions' => [ 'shape' => 'AvailabilityOptionsStatus', ], ], ], 'UpdateDomainEndpointOptionsRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'DomainEndpointOptions', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'DomainEndpointOptions' => [ 'shape' => 'DomainEndpointOptions', ], ], ], 'UpdateDomainEndpointOptionsResponse' => [ 'type' => 'structure', 'members' => [ 'DomainEndpointOptions' => [ 'shape' => 'DomainEndpointOptionsStatus', ], ], ], 'UpdateScalingParametersRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'ScalingParameters', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'ScalingParameters' => [ 'shape' => 'ScalingParameters', ], ], ], 'UpdateScalingParametersResponse' => [ 'type' => 'structure', 'required' => [ 'ScalingParameters', ], 'members' => [ 'ScalingParameters' => [ 'shape' => 'ScalingParametersStatus', ], ], ], 'UpdateServiceAccessPoliciesRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'AccessPolicies', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'AccessPolicies' => [ 'shape' => 'PolicyDocument', ], ], ], 'UpdateServiceAccessPoliciesResponse' => [ 'type' => 'structure', 'required' => [ 'AccessPolicies', ], 'members' => [ 'AccessPolicies' => [ 'shape' => 'AccessPoliciesStatus', ], ], ], 'UpdateTimestamp' => [ 'type' => 'timestamp', ], 'ValidationException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'Word' => [ 'type' => 'string', 'pattern' => '[\\S]+', ], ],];
