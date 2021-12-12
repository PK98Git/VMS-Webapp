<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\BulkExports;

use Twilio\ListResource;
use Twilio\Version;

class ExportList extends ListResource {
    /**
     * Construct the ExportList
     * 
     * @param Version $version Version that contains the resource
     * @return \Twilio\Rest\Preview\BulkExports\ExportList 
     */
    public function __construct(Version $version) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array();
    }

    /**
     * Constructs a ExportContext
     * 
     * @param string $resourceType The resource_type
     * @return \Twilio\Rest\Preview\BulkExports\ExportContext 
     */
    public function getContext($resourceType) {
        return new ExportContext(
            $this->version,
            $resourceType
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Preview.BulkExports.ExportList]';
    }
}