<?php 
# Code generated by sdkgen
# Generated on 2020-10-19 21:34:23.42100678 +0000 UTC using container gcr.io/repcore-prod/sdkgen:latest
# DO NOT EDIT!

namespace Vendasta\GSuite\V1\internal;

interface PartnerClientInterface
{ 
    /**
     * Auth wrapper for \GSuite\V1\PartnerClient::ListSubscriptions
     * @param \Gsuite\V1\ListSubscriptionsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Gsuite\V1\ListSubscriptionsResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListSubscriptions(\Gsuite\V1\ListSubscriptionsRequest $req, array $options = []): \Gsuite\V1\ListSubscriptionsResponse;
    
    /**
     * Auth wrapper for \GSuite\V1\PartnerClient::GetDomainInformation
     * @param \Gsuite\V1\GetDomainInformationRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Gsuite\V1\GetDomainInformationResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetDomainInformation(\Gsuite\V1\GetDomainInformationRequest $req, array $options = []): \Gsuite\V1\GetDomainInformationResponse;
    
    /**
     * Auth wrapper for \GSuite\V1\PartnerClient::ChangeSeats
     * @param \Gsuite\V1\ChangeSeatsRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ChangeSeats(\Gsuite\V1\ChangeSeatsRequest $req, array $options = []): \Google\Protobuf\GPBEmpty;
    
}