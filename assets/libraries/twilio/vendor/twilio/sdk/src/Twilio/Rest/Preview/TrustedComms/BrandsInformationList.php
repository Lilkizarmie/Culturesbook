<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\TrustedComms;

use Twilio\ListResource;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class BrandsInformationList extends ListResource {
    /**
     * Construct the BrandsInformationList
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(Version $version) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [];
    }

    /**
     * Constructs a BrandsInformationContext
     */
    public function getContext(): BrandsInformationContext {
        return new BrandsInformationContext($this->version);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Preview.TrustedComms.BrandsInformationList]';
    }
}