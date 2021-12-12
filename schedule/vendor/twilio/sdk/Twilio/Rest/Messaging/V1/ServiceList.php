<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Messaging\V1;

use Twilio\ListResource;
use Twilio\Options;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

class ServiceList extends ListResource {
    /**
     * Construct the ServiceList
     * 
     * @param Version $version Version that contains the resource
     * @return \Twilio\Rest\Messaging\V1\ServiceList 
     */
    public function __construct(Version $version) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array();

        $this->uri = '/Services';
    }

    /**
     * Create a new ServiceInstance
     * 
     * @param string $friendlyName The friendly_name
     * @param array|Options $options Optional Arguments
     * @return ServiceInstance Newly created ServiceInstance
     */
    public function create($friendlyName, $options = array()) {
        $options = new Values($options);

        $data = Values::of(array(
            'FriendlyName' => $friendlyName,
            'InboundRequestUrl' => $options['inboundRequestUrl'],
            'InboundMethod' => $options['inboundMethod'],
            'FallbackUrl' => $options['fallbackUrl'],
            'FallbackMethod' => $options['fallbackMethod'],
            'StatusCallback' => $options['statusCallback'],
            'StickySender' => Serialize::booleanToString($options['stickySender']),
            'MmsConverter' => Serialize::booleanToString($options['mmsConverter']),
            'SmartEncoding' => Serialize::booleanToString($options['smartEncoding']),
            'ScanMessageContent' => $options['scanMessageContent'],
            'FallbackToLongCode' => Serialize::booleanToString($options['fallbackToLongCode']),
            'AreaCodeGeomatch' => Serialize::booleanToString($options['areaCodeGeomatch']),
            'ValidityPeriod' => $options['validityPeriod'],
        ));

        $payload = $this->version->create(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new ServiceInstance(
            $this->version,
            $payload
        );
    }

    /**
     * Streams ServiceInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     * 
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return \Twilio\Stream stream of results
     */
    public function stream($limit = null, $pageSize = null) {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Reads ServiceInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     * 
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return ServiceInstance[] Array of results
     */
    public function read($limit = null, $pageSize = null) {
        return iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
     * Retrieve a single page of ServiceInstance records from the API.
     * Request is executed immediately
     * 
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return \Twilio\Page Page of ServiceInstance
     */
    public function page($pageSize = Values::NONE, $pageToken = Values::NONE, $pageNumber = Values::NONE) {
        $params = Values::of(array(
            'PageToken' => $pageToken,
            'Page' => $pageNumber,
            'PageSize' => $pageSize,
        ));

        $response = $this->version->page(
            'GET',
            $this->uri,
            $params
        );

        return new ServicePage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of ServiceInstance records from the API.
     * Request is executed immediately
     * 
     * @param string $targetUrl API-generated URL for the requested results page
     * @return \Twilio\Page Page of ServiceInstance
     */
    public function getPage($targetUrl) {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new ServicePage($this->version, $response, $this->solution);
    }

    /**
     * Constructs a ServiceContext
     * 
     * @param string $sid The sid
     * @return \Twilio\Rest\Messaging\V1\ServiceContext 
     */
    public function getContext($sid) {
        return new ServiceContext(
            $this->version,
            $sid
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Messaging.V1.ServiceList]';
    }
}