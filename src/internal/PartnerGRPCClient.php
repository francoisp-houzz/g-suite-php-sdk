<?php 
# Code generated by sdkgen
# Generated on 2020-10-22 14:52:11.5787534 +0000 UTC using container gcr.io/repcore-prod/sdkgen:latest
# DO NOT EDIT!

namespace Vendasta\GSuite\V1\internal;

use Vendasta\Vax\GRPCClient;

class PartnerGRPCClient extends GRPCClient implements PartnerClientInterface
{
    private $client;

    /**
     * Constructor for PartnerGRPCClient
     * @param string $hostname hostname of the service to hit
     * @param string $scope
     * @param bool $secure
     * @param float $default_timeout time in milliseconds
     */
    public function __construct(string $hostname, string $scope, bool $secure = true, float $default_timeout = 10000)
    {
        parent::__construct($hostname, $scope, $secure, $default_timeout);
        $this->client = new \GSuite\V1\PartnerClient($hostname, $this->getClientOptions());
    }
    
    /**
     * Auth wrapper for \GSuite\V1\PartnerClient::ListSubscriptions
     * @param \Gsuite\V1\ListSubscriptionsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Gsuite\V1\ListSubscriptionsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListSubscriptions(\Gsuite\V1\ListSubscriptionsRequest $req, array $options = []): \Gsuite\V1\ListSubscriptionsResponse
    {
        return $this->doRequest(
            array($this->client, 'ListSubscriptions'),
            $req,
            $options
        );
    }
    
    /**
     * Auth wrapper for \GSuite\V1\PartnerClient::GetDomainInformation
     * @param \Gsuite\V1\GetDomainInformationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Gsuite\V1\GetDomainInformationResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetDomainInformation(\Gsuite\V1\GetDomainInformationRequest $req, array $options = []): \Gsuite\V1\GetDomainInformationResponse
    {
        return $this->doRequest(
            array($this->client, 'GetDomainInformation'),
            $req,
            $options
        );
    }
    
    /**
     * Auth wrapper for \GSuite\V1\PartnerClient::ChangeSeats
     * @param \Gsuite\V1\ChangeSeatsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ChangeSeats(\Gsuite\V1\ChangeSeatsRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            array($this->client, 'ChangeSeats'),
            $req,
            $options
        );
    }
    
    /**
     * Auth wrapper for \GSuite\V1\PartnerClient::UpdateSSO
     * @param \Gsuite\V1\UpdateSSORequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function UpdateSSO(\Gsuite\V1\UpdateSSORequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            array($this->client, 'UpdateSSO'),
            $req,
            $options
        );
    }
    
}
