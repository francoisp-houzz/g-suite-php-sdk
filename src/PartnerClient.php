<?php 
namespace Vendasta\GSuite\V1;

use Vendasta\GSuite\V1\internal\PartnerGeneratedClient;

class PartnerClient extends PartnerGeneratedClient
{
    /**
     * PartnerClient constructor.
     * @param string $env one of \Vendasta\Vax\Environment::<Env>
     * @param float $default_timeout
     */
    public function __construct(string $env, float $default_timeout = 10000)
    {
        parent::__construct($env, $default_timeout);
    }
}
