<?php

namespace Wizkunde\OpenSAML\Configuration;

interface ClaimInterface
{
    /**
     * Set the claim key that we retreived from the AuthRequest
     *
     * @param string $claimKey
     */
    public function setKey($claimKey);

    /**
     * Get the claim key that we retreived from the AuthRequest
     *
     * @return string
     */
    public function getKey();

    /**
     * Set the claim value that we retreived from the AuthRequest
     *
     * @return mixed
     */
    public function getValue();

    /**
     * Set the claim value that we retreived from the AuthRequest
     *
     * @param string $claimValue
     */
    public function setValue($claimValue);
}