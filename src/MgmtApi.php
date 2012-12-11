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
class MgmtApi {

	private $basePath = "https://api.groupdocs.com/v2.0";

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

	public static function create($apiClient) {
	  return new self($apiClient);
	}

    public function setBasePath($basePath) {
	  $this->basePath = $basePath;
	}
	  
	public function getBasePath() {
	  $this->basePath;
	}

  /**
	 * GetUserProfile
	 * Get user profile
   * userId, string: User GUID (required)
   * @return UserInfoResponse
	 */

   public function GetUserProfile($userId) {
      if( $userId === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{userId}/profile");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

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
  		                                                'UserInfoResponse');
  	  return $responseObject;
      }
  /**
	 * UpdateUserProfile
	 * Update user profile
   * userId, string: User GUID (required)
   * body, UserInfo: Info (required)
   * @return UpdateUserResponse
	 */

   public function UpdateUserProfile($userId, $body) {
      if( $userId === null || $body === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{userId}/profile");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

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
  		                                                'UpdateUserResponse');
  	  return $responseObject;
      }
  /**
	 * ChangeUserPassword
	 * Change user password
   * userId, string: User GUID (required)
   * body, UserPasswordInfo: Password (required)
   * @return ChangePasswordResponse
	 */

   public function ChangeUserPassword($userId, $body) {
      if( $userId === null || $body === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{userId}/profile/password");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

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
  		                                                'ChangePasswordResponse');
  	  return $responseObject;
      }
  /**
	 * GetUserProfileByResetToken
	 * Get user profile by reset token
   * callerId, string: Caller GUID (required)
   * token, string: Token (required)
   * @return UserInfoResponse
	 */

   public function GetUserProfileByResetToken($callerId, $token) {
      if( $callerId === null || $token === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{callerId}/reset-tokens?token={token}");
  	  $pos = strpos($resourcePath, "?");
	  if($pos !== false){
  	  	$resourcePath = substr($resourcePath, 0, $pos);
	  }
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($token !== null) {
  		  $queryParams['token'] = $this->apiClient->toPathValue($token);
  		}
  		if($callerId !== null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
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
  		                                                'UserInfoResponse');
  	  return $responseObject;
      }
  /**
	 * GetUserProfileByVerifToken
	 * Get user profile by verif token
   * callerId, string: Caller GUID (required)
   * token, string: Token (required)
   * @return UserInfoResponse
	 */

   public function GetUserProfileByVerifToken($callerId, $token) {
      if( $callerId === null || $token === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{callerId}/verif-tokens?token={token}");
  	  $pos = strpos($resourcePath, "?");
	  if($pos !== false){
  	  	$resourcePath = substr($resourcePath, 0, $pos);
	  }
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($token !== null) {
  		  $queryParams['token'] = $this->apiClient->toPathValue($token);
  		}
  		if($callerId !== null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
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
  		                                                'UserInfoResponse');
  	  return $responseObject;
      }
  /**
	 * GetUserProfileByClaimedToken
	 * Get user profile by claimed token
   * callerId, string: Caller GUID (required)
   * token, string: Token (required)
   * @return UserInfoResponse
	 */

   public function GetUserProfileByClaimedToken($callerId, $token) {
      if( $callerId === null || $token === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{callerId}/claimed-tokens?token={token}");
  	  $pos = strpos($resourcePath, "?");
	  if($pos !== false){
  	  	$resourcePath = substr($resourcePath, 0, $pos);
	  }
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($token !== null) {
  		  $queryParams['token'] = $this->apiClient->toPathValue($token);
  		}
  		if($callerId !== null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
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
  		                                                'UserInfoResponse');
  	  return $responseObject;
      }
  /**
	 * GetAlienUserProfile
	 * Get alien user profile
   * callerId, string: Caller GUID (required)
   * userId, string: User GUID (required)
   * @return UserInfoResponse
	 */

   public function GetAlienUserProfile($callerId, $userId) {
      if( $callerId === null || $userId === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{callerId}/users/{userId}/profile");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($callerId !== null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
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
  		                                                'UserInfoResponse');
  	  return $responseObject;
      }
  /**
	 * UpdateAlienUserProfile
	 * Update alien user profile
   * callerId, string: Caller GUID (required)
   * userId, string: User GUID (required)
   * body, UserInfo: Info (required)
   * @return UpdateUserResponse
	 */

   public function UpdateAlienUserProfile($callerId, $userId, $body) {
      if( $callerId === null || $userId === null || $body === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{callerId}/users/{userId}/profile");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($callerId !== null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
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
  		                                                'UpdateUserResponse');
  	  return $responseObject;
      }
  /**
	 * CreateUser
	 * Create user
   * callerId, string: Caller GUID (required)
   * body, UserInfo: Payload (required)
   * @return CreateUserResponse
	 */

   public function CreateUser($callerId, $body) {
      if( $callerId === null || $body === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{callerId}/users");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($callerId !== null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
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
  		                                                'CreateUserResponse');
  	  return $responseObject;
      }
  /**
	 * CreateUserLogin
	 * Create user login
   * callerId, string: Caller GUID (required)
   * userId, string: User GUID (required)
   * password, string: Password (required)
   * @return UserInfoResponse
	 */

   public function CreateUserLogin($callerId, $userId, $password) {
      if( $callerId === null || $userId === null || $password === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{callerId}/users/{userId}/logins");
  	  $pos = strpos($resourcePath, "?");
	  if($pos !== false){
  	  	$resourcePath = substr($resourcePath, 0, $pos);
	  }
	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($password !== null) {
  		  $queryParams['password'] = $this->apiClient->toPathValue($password);
  		}
  		if($callerId !== null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
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
  		                                                'UserInfoResponse');
  	  return $responseObject;
      }
  /**
	 * ChangeAlienUserPassword
	 * Change alien user password
   * callerId, string: Caller GUID (required)
   * userId, string: User GUID (required)
   * body, UserPasswordInfo: Password (required)
   * @return ChangePasswordResponse
	 */

   public function ChangeAlienUserPassword($callerId, $userId, $body) {
      if( $callerId === null || $userId === null || $body === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{callerId}/users/{userId}/password");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($callerId !== null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
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
  		                                                'ChangePasswordResponse');
  	  return $responseObject;
      }
  /**
	 * ResetUserPassword
	 * Reset user password
   * callerId, string: Caller GUID (required)
   * userId, string: User GUID (required)
   * @return ResetPasswordResponse
	 */

   public function ResetUserPassword($callerId, $userId) {
      if( $callerId === null || $userId === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{callerId}/users/{userId}/password");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "DELETE";
      $queryParams = array();
      $headerParams = array();

      if($callerId !== null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
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
  		                                                'ResetPasswordResponse');
  	  return $responseObject;
      }
  /**
	 * GetStorageProviders
	 * Returns user's storage providers.
   * userId, string: User GUID (required)
   * @return GetStorageProvidersResponse
	 */

   public function GetStorageProviders($userId) {
      if( $userId === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{userId}/storages");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

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
  		                                                'GetStorageProvidersResponse');
  	  return $responseObject;
      }
  /**
	 * AddStorageProvider
	 * Adds a new storage provider configuration.
   * userId, string: User GUID (required)
   * provider, string: Storage provider name (required)
   * body, StorageProviderInfo: Storage provider configuration details (required)
   * @return AddStorageProviderResponse
	 */

   public function AddStorageProvider($userId, $provider, $body) {
      if( $userId === null || $provider === null || $body === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{userId}/storages/{provider}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($provider !== null) {
  			$resourcePath = str_replace("{" . "provider" . "}",
  			                            $provider, $resourcePath);
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
  		                                                'AddStorageProviderResponse');
  	  return $responseObject;
      }
  /**
	 * UpdateStorageProvider
	 * Updates user's storage provider configuration.
   * userId, string: User GUID (required)
   * provider, string: Storage provider name (required)
   * body, StorageProviderInfo: Storage provider configuration details (required)
   * @return UpdateStorageProviderResponse
	 */

   public function UpdateStorageProvider($userId, $provider, $body) {
      if( $userId === null || $provider === null || $body === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{userId}/storages/{provider}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($provider !== null) {
  			$resourcePath = str_replace("{" . "provider" . "}",
  			                            $provider, $resourcePath);
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
  		                                                'UpdateStorageProviderResponse');
  	  return $responseObject;
      }
  /**
	 * GetRoles
	 * Returns a list of user roles.
   * userId, string: User GUID (required)
   * @return GetRolesResponse
	 */

   public function GetRoles($userId) {
      if( $userId === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{userId}/roles");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

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
  		                                                'GetRolesResponse');
  	  return $responseObject;
      }
  /**
	 * GetUserRoles
	 * Returns a list of user roles.
   * callerId, string: Caller GUID (required)
   * userId, string: User GUID (required)
   * @return GetRolesResponse
	 */

   public function GetUserRoles($callerId, $userId) {
      if( $callerId === null || $userId === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{callerId}/users/{userId}/roles");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($callerId !== null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
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
  		                                                'GetRolesResponse');
  	  return $responseObject;
      }
  /**
	 * SetUserRoles
	 * Set user roles.
   * callerId, string: Caller GUID (required)
   * userId, string: User GUID (required)
   * body, List[RoleInfo]: A list of user roles (required)
   * @return SetUserRolesResponse
	 */

   public function SetUserRoles($callerId, $userId, $body) {
      if( $callerId === null || $userId === null || $body === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{callerId}/users/{userId}/roles");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($callerId !== null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
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
  		                                                'SetUserRolesResponse');
  	  return $responseObject;
      }
  /**
	 * GetAccount
	 * Returns an account information.
   * userId, string: User GUID (required)
   * @return GetAccountResponse
	 */

   public function GetAccount($userId) {
      if( $userId === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{userId}/account");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

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
  		                                                'GetAccountResponse');
  	  return $responseObject;
      }
  /**
	 * DeleteAccount
	 * Closes user's account.
   * userId, string: User global unique identifier (required)
   * @return DeleteAccountResponse
	 */

   public function DeleteAccount($userId) {
      if( $userId === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{userId}/account");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "DELETE";
      $queryParams = array();
      $headerParams = array();

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
  		                                                'DeleteAccountResponse');
  	  return $responseObject;
      }
  /**
	 * GetAccountUsers
	 * Returns account user list.
   * adminId, string: Administrator GUID (required)
   * @return GetAccountUsersResponse
	 */

   public function GetAccountUsers($adminId) {
      if( $adminId === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{adminId}/account/users");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($adminId !== null) {
  			$resourcePath = str_replace("{" . "adminId" . "}",
  			                            $adminId, $resourcePath);
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
  		                                                'GetAccountUsersResponse');
  	  return $responseObject;
      }
  /**
	 * UpdateAccountUser
	 * Create or update account user.
   * adminId, string: Administrator GUID (required)
   * userName, string: User name (required)
   * body, UserInfo: User details (required)
   * @return UpdateAccountUserResponse
	 */

   public function UpdateAccountUser($adminId, $userName, $body) {
      if( $adminId === null || $userName === null || $body === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{adminId}/account/users/{userName}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($adminId !== null) {
  			$resourcePath = str_replace("{" . "adminId" . "}",
  			                            $adminId, $resourcePath);
  		}
  		if($userName !== null) {
  			$resourcePath = str_replace("{" . "userName" . "}",
  			                            $userName, $resourcePath);
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
  		                                                'UpdateAccountUserResponse');
  	  return $responseObject;
      }
  /**
	 * DeleteAccountUser
	 * Delete account user.
   * adminId, string: Administrator GUID (required)
   * userName, string: User name (required)
   * @return DeleteAccountUserResponse
	 */

   public function DeleteAccountUser($adminId, $userName) {
      if( $adminId === null || $userName === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{adminId}/account/users/{userName}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "DELETE";
      $queryParams = array();
      $headerParams = array();

      if($adminId !== null) {
  			$resourcePath = str_replace("{" . "adminId" . "}",
  			                            $adminId, $resourcePath);
  		}
  		if($userName !== null) {
  			$resourcePath = str_replace("{" . "userName" . "}",
  			                            $userName, $resourcePath);
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
  		                                                'DeleteAccountUserResponse');
  	  return $responseObject;
      }
  /**
	 * GetUserEmbedKey
	 * Returns active user embed key.
   * userId, string: User GUID (required)
   * area, string: Application area where the key is (required)
   * @return GetUserEmbedKeyResponse
	 */

   public function GetUserEmbedKey($userId, $area) {
      if( $userId === null || $area === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{userId}/embedkey/{area}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($area !== null) {
  			$resourcePath = str_replace("{" . "area" . "}",
  			                            $area, $resourcePath);
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
  		                                                'GetUserEmbedKeyResponse');
  	  return $responseObject;
      }
  /**
	 * GetUserEmbedKeyFromGuid
	 * Returns embed key by GUID.
   * callerId, string: UserId invoked the service (required)
   * guid, string: Key GUID (required)
   * @return GetUserEmbedKeyResponse
	 */

   public function GetUserEmbedKeyFromGuid($callerId, $guid) {
      if( $callerId === null || $guid === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{callerId}/embedkey/guid/{guid}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($callerId !== null) {
  			$resourcePath = str_replace("{" . "callerId" . "}",
  			                            $callerId, $resourcePath);
  		}
  		if($guid !== null) {
  			$resourcePath = str_replace("{" . "guid" . "}",
  			                            $guid, $resourcePath);
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
  		                                                'GetUserEmbedKeyResponse');
  	  return $responseObject;
      }
  /**
	 * GenerateKeyForUser
	 * Generates new active user embed key.
   * userId, string: User GUID (required)
   * area, string: Application area where the key is (required)
   * @return GetUserEmbedKeyResponse
	 */

   public function GenerateKeyForUser($userId, $area) {
      if( $userId === null || $area === null ) {
        throw new ApiException("missing required parameters", 400);
      }
      //parse inputs
  	  $resourcePath = str_replace("*", "", "/mgmt/{userId}/embedkey/new/{area}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($area !== null) {
  			$resourcePath = str_replace("{" . "area" . "}",
  			                            $area, $resourcePath);
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
  		                                                'GetUserEmbedKeyResponse');
  	  return $responseObject;
      }
  
}

