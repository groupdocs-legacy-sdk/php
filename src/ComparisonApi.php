<?php
/**
 *  Copyright 2012 GroupDocs.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */
class ComparisonApi {

	private $basePath = "https://api.groupdocs.com/v2.0";

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

    public function setBasePath($basePath) {
	  $this->basePath = $basePath;
	}
	  
	public function getBasePath() {
	  $this->basePath;
	}

  /**
	 * DownloadResult
	 * Download comparison result file
   * userId, string: User GUID (required)
   * resultFileId, string: Comparison result file GUID (required)
   * format, string: Comparison result file format (optional)
   * @return stream
	 */

   public function DownloadResult($userId, $resultFileId, $format=null, $outFileStream) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/comparison/{userId}/comparison/download?resultFileId={resultFileId}&format={format}");
  	  $resourcePath = substr($resourcePath, 0, strpos($resourcePath, "?"));
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($resultFileId !== null) {
  		  $queryParams['resultFileId'] = $this->apiClient->toPathValue($resultFileId);
  		}
  		if($format !== null) {
  		  $queryParams['format'] = $this->apiClient->toPathValue($format);
  		}
  		if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      return $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams, $outFileStream);
      }
  /**
	 * Compare
	 * Compare
   * userId, string: User GUID (required)
   * sourceFileId, string: Source File GUID (required)
   * targetFileId, string: Target File GUID (required)
   * callbackUrl, string: Callback Url (required)
   * @return CompareResponse
	 */

   public function Compare($userId, $sourceFileId, $targetFileId, $callbackUrl) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/comparison/{userId}/comparison/compare?source={sourceFileId}&target={targetFileId}&callback={callbackUrl}");
  	  $resourcePath = substr($resourcePath, 0, strpos($resourcePath, "?"));
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($sourceFileId !== null) {
  		  $queryParams['source'] = $this->apiClient->toPathValue($sourceFileId);
  		}
  		if($targetFileId !== null) {
  		  $queryParams['target'] = $this->apiClient->toPathValue($targetFileId);
  		}
  		if($callbackUrl !== null) {
  		  $queryParams['callback'] = $this->apiClient->toPathValue($callbackUrl);
  		}
  		if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'CompareResponse');
  	  return $responseObject;
      }
  /**
	 * GetChanges
	 * Get changes
   * userId, string: User GUID (required)
   * resultFileId, string: Comparison result file GUID (required)
   * @return ChangesResponse
	 */

   public function GetChanges($userId, $resultFileId) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/comparison/{userId}/comparison/changes?resultFileId={resultFileId}");
  	  $resourcePath = substr($resourcePath, 0, strpos($resourcePath, "?"));
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($resultFileId !== null) {
  		  $queryParams['resultFileId'] = $this->apiClient->toPathValue($resultFileId);
  		}
  		if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'ChangesResponse');
  	  return $responseObject;
      }
  /**
	 * UpdateChanges
	 * Update changes
   * userId, string: User GUID (required)
   * resultFileId, string: Comparison result file GUID (required)
   * body, List[ChangeInfo]: Comparison changes to update (accept or reject) (required)
   * @return ChangesResponse
	 */

   public function UpdateChanges($userId, $resultFileId, $body) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/comparison/{userId}/comparison/changes?resultFileId={resultFileId}");
  	  $resourcePath = substr($resourcePath, 0, strpos($resourcePath, "?"));
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($resultFileId !== null) {
  		  $queryParams['resultFileId'] = $this->apiClient->toPathValue($resultFileId);
  		}
  		if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'ChangesResponse');
  	  return $responseObject;
      }
  /**
	 * GetDocumentDetails
	 * Get document details
   * userId, string: User GUID (required)
   * guid, string: Document GUID (required)
   * @return DocumentDetailsResponse
	 */

   public function GetDocumentDetails($userId, $guid) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/comparison/{userId}/comparison/document?guid={guid}");
  	  $resourcePath = substr($resourcePath, 0, strpos($resourcePath, "?"));
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($guid !== null) {
  		  $queryParams['guid'] = $this->apiClient->toPathValue($guid);
  		}
  		if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
      $response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);
      if(! $response){
        return null;
      }

  	  $responseObject = $this->apiClient->deserialize($response,
  		                                                'DocumentDetailsResponse');
  	  return $responseObject;
      }
  
}

