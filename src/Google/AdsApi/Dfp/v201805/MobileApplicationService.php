<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileApplicationService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201805\\ObjectValue',
      'UnarchiveMobileApplications' => 'Google\\AdsApi\\Dfp\\v201805\\UnarchiveMobileApplications',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201805\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201805\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'ArchiveMobileApplications' => 'Google\\AdsApi\\Dfp\\v201805\\ArchiveMobileApplications',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'MobileApplicationAction' => 'Google\\AdsApi\\Dfp\\v201805\\MobileApplicationAction',
      'MobileApplicationActionError' => 'Google\\AdsApi\\Dfp\\v201805\\MobileApplicationActionError',
      'MobileApplication' => 'Google\\AdsApi\\Dfp\\v201805\\MobileApplication',
      'MobileApplicationError' => 'Google\\AdsApi\\Dfp\\v201805\\MobileApplicationError',
      'MobileApplicationPage' => 'Google\\AdsApi\\Dfp\\v201805\\MobileApplicationPage',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201805\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201805\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201805\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201805\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201805\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'createMobileApplicationsResponse' => 'Google\\AdsApi\\Dfp\\v201805\\createMobileApplicationsResponse',
      'getMobileApplicationsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getMobileApplicationsByStatementResponse',
      'performMobileApplicationActionResponse' => 'Google\\AdsApi\\Dfp\\v201805\\performMobileApplicationActionResponse',
      'updateMobileApplicationsResponse' => 'Google\\AdsApi\\Dfp\\v201805\\updateMobileApplicationsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/MobileApplicationService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates and claims {@link MobileApplication mobile applications}
     * to be used for targeting in the network.
     *
     * @param \Google\AdsApi\Dfp\v201805\MobileApplication[] $mobileApplications
     * @return \Google\AdsApi\Dfp\v201805\MobileApplication[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function createMobileApplications(array $mobileApplications)
    {
      return $this->__soapCall('createMobileApplications', array(array('mobileApplications' => $mobileApplications)))->getRval();
    }

    /**
     * Gets a {@link MobileApplicationPage mobileApplicationPage} of
     * {@link MobileApplication mobile applications} that satisfy the given {@link Statement}.
     * The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link MobileApplication#id}</td>
     * </tr>
     * <tr>
     * <td>{@code displayName}</td>
     * <td>{@link MobileApplication#displayName}</td>
     * </tr>
     * <tr>
     * <td>{@code appStore}</td>
     * <td>{@link MobileApplication#appStore}</td>
     * </tr>
     * <tr>
     * <td>{@code appStoreId}</td>
     * <td>{@link MobileApplication#appStoreId}</td>
     * <tr/>
     * <tr>
     * <td>{@code isArchived}</td>
     * <td>{@link MobileApplication#isArchived}</td>
     * </tr>
     * </table>
     *
     * mobile applications.
     *
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\MobileApplicationPage
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getMobileApplicationsByStatement(\Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('getMobileApplicationsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs an action on {@link MobileApplication mobile applications}.
     *
     * a set of mobile applications.
     *
     * @param \Google\AdsApi\Dfp\v201805\MobileApplicationAction $mobileApplicationAction
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function performMobileApplicationAction(\Google\AdsApi\Dfp\v201805\MobileApplicationAction $mobileApplicationAction, \Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('performMobileApplicationAction', array(array('mobileApplicationAction' => $mobileApplicationAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link MobileApplication mobile applications}.
     *
     * @param \Google\AdsApi\Dfp\v201805\MobileApplication[] $mobileApplications
     * @return \Google\AdsApi\Dfp\v201805\MobileApplication[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function updateMobileApplications(array $mobileApplications)
    {
      return $this->__soapCall('updateMobileApplications', array(array('mobileApplications' => $mobileApplications)))->getRval();
    }

}