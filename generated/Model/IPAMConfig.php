<?php

namespace Docker\API\Model;

class IPAMConfig
{
    /**
     * @var string
     */
    protected $subnet;
    /**
     * @var string
     */
    protected $iPRange;
    /**
     * @var string
     */
    protected $gateway;
    /**
     * @var string
     */
    protected $iPv4Address;

    /**
     * @return string
     */
    public function getSubnet()
    {
        return $this->subnet;
    }

    /**
     * @param string $subnet
     *
     * @return self
     */
    public function setSubnet($subnet = null)
    {
        $this->subnet = $subnet;

        return $this;
    }

    /**
     * @return string
     */
    public function getIPRange()
    {
        return $this->iPRange;
    }

    /**
     * @param string $iPRange
     *
     * @return self
     */
    public function setIPRange($iPRange = null)
    {
        $this->iPRange = $iPRange;

        return $this;
    }

    /**
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * @param string $gateway
     *
     * @return self
     */
    public function setGateway($gateway = null)
    {
        $this->gateway = $gateway;

        return $this;
    }

    /**
     * @return string
     */
    public function getIPv4Address()
    {
        return $this->iPv4Address;
    }

    /**
     * @param string $iPv4Address
     *
     * @return self
     */
    public function setIPv4Address($iPv4Address = null)
    {
        $this->iPv4Address = $iPv4Address;

        return $this;
    }
}
