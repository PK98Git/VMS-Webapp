<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Sync\V1\Service\SyncMap;

use Twilio\Options;
use Twilio\Values;

abstract class SyncMapItemOptions {
    /**
     * @param string $order The order
     * @param string $from The from
     * @param string $bounds The bounds
     * @return ReadSyncMapItemOptions Options builder
     */
    public static function read($order = Values::NONE, $from = Values::NONE, $bounds = Values::NONE) {
        return new ReadSyncMapItemOptions($order, $from, $bounds);
    }
}

class ReadSyncMapItemOptions extends Options {
    /**
     * @param string $order The order
     * @param string $from The from
     * @param string $bounds The bounds
     */
    public function __construct($order = Values::NONE, $from = Values::NONE, $bounds = Values::NONE) {
        $this->options['order'] = $order;
        $this->options['from'] = $from;
        $this->options['bounds'] = $bounds;
    }

    /**
     * The order
     * 
     * @param string $order The order
     * @return $this Fluent Builder
     */
    public function setOrder($order) {
        $this->options['order'] = $order;
        return $this;
    }

    /**
     * The from
     * 
     * @param string $from The from
     * @return $this Fluent Builder
     */
    public function setFrom($from) {
        $this->options['from'] = $from;
        return $this;
    }

    /**
     * The bounds
     * 
     * @param string $bounds The bounds
     * @return $this Fluent Builder
     */
    public function setBounds($bounds) {
        $this->options['bounds'] = $bounds;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Sync.V1.ReadSyncMapItemOptions ' . implode(' ', $options) . ']';
    }
}