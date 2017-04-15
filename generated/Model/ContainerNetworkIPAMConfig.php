<?php

namespace Docker\API\Model;

class ContainerNetworkIPAMConfig
{
    /**
     * @var string
     */
    protected $iPv4Address;

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
