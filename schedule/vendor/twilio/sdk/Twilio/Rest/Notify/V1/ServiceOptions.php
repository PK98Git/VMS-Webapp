<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Notify\V1;

use Twilio\Options;
use Twilio\Values;

abstract class ServiceOptions {
    /**
     * @param string $friendlyName The friendly_name
     * @param string $apnCredentialSid The apn_credential_sid
     * @param string $gcmCredentialSid The gcm_credential_sid
     * @param string $messagingServiceSid The messaging_service_sid
     * @param string $facebookMessengerPageId The facebook_messenger_page_id
     * @param string $defaultApnNotificationProtocolVersion The
     *                                                      default_apn_notification_protocol_version
     * @param string $defaultGcmNotificationProtocolVersion The
     *                                                      default_gcm_notification_protocol_version
     * @param string $fcmCredentialSid The fcm_credential_sid
     * @param string $defaultFcmNotificationProtocolVersion The
     *                                                      default_fcm_notification_protocol_version
     * @param boolean $logEnabled The log_enabled
     * @param string $alexaSkillId The alexa_skill_id
     * @param string $defaultAlexaNotificationProtocolVersion The
     *                                                        default_alexa_notification_protocol_version
     * @return CreateServiceOptions Options builder
     */
    public static function create($friendlyName = Values::NONE, $apnCredentialSid = Values::NONE, $gcmCredentialSid = Values::NONE, $messagingServiceSid = Values::NONE, $facebookMessengerPageId = Values::NONE, $defaultApnNotificationProtocolVersion = Values::NONE, $defaultGcmNotificationProtocolVersion = Values::NONE, $fcmCredentialSid = Values::NONE, $defaultFcmNotificationProtocolVersion = Values::NONE, $logEnabled = Values::NONE, $alexaSkillId = Values::NONE, $defaultAlexaNotificationProtocolVersion = Values::NONE) {
        return new CreateServiceOptions($friendlyName, $apnCredentialSid, $gcmCredentialSid, $messagingServiceSid, $facebookMessengerPageId, $defaultApnNotificationProtocolVersion, $defaultGcmNotificationProtocolVersion, $fcmCredentialSid, $defaultFcmNotificationProtocolVersion, $logEnabled, $alexaSkillId, $defaultAlexaNotificationProtocolVersion);
    }

    /**
     * @param string $friendlyName The friendly_name
     * @return ReadServiceOptions Options builder
     */
    public static function read($friendlyName = Values::NONE) {
        return new ReadServiceOptions($friendlyName);
    }

    /**
     * @param string $friendlyName The friendly_name
     * @param string $apnCredentialSid The apn_credential_sid
     * @param string $gcmCredentialSid The gcm_credential_sid
     * @param string $messagingServiceSid The messaging_service_sid
     * @param string $facebookMessengerPageId The facebook_messenger_page_id
     * @param string $defaultApnNotificationProtocolVersion The
     *                                                      default_apn_notification_protocol_version
     * @param string $defaultGcmNotificationProtocolVersion The
     *                                                      default_gcm_notification_protocol_version
     * @param string $fcmCredentialSid The fcm_credential_sid
     * @param string $defaultFcmNotificationProtocolVersion The
     *                                                      default_fcm_notification_protocol_version
     * @param boolean $logEnabled The log_enabled
     * @param string $alexaSkillId The alexa_skill_id
     * @param string $defaultAlexaNotificationProtocolVersion The
     *                                                        default_alexa_notification_protocol_version
     * @return UpdateServiceOptions Options builder
     */
    public static function update($friendlyName = Values::NONE, $apnCredentialSid = Values::NONE, $gcmCredentialSid = Values::NONE, $messagingServiceSid = Values::NONE, $facebookMessengerPageId = Values::NONE, $defaultApnNotificationProtocolVersion = Values::NONE, $defaultGcmNotificationProtocolVersion = Values::NONE, $fcmCredentialSid = Values::NONE, $defaultFcmNotificationProtocolVersion = Values::NONE, $logEnabled = Values::NONE, $alexaSkillId = Values::NONE, $defaultAlexaNotificationProtocolVersion = Values::NONE) {
        return new UpdateServiceOptions($friendlyName, $apnCredentialSid, $gcmCredentialSid, $messagingServiceSid, $facebookMessengerPageId, $defaultApnNotificationProtocolVersion, $defaultGcmNotificationProtocolVersion, $fcmCredentialSid, $defaultFcmNotificationProtocolVersion, $logEnabled, $alexaSkillId, $defaultAlexaNotificationProtocolVersion);
    }
}

class CreateServiceOptions extends Options {
    /**
     * @param string $friendlyName The friendly_name
     * @param string $apnCredentialSid The apn_credential_sid
     * @param string $gcmCredentialSid The gcm_credential_sid
     * @param string $messagingServiceSid The messaging_service_sid
     * @param string $facebookMessengerPageId The facebook_messenger_page_id
     * @param string $defaultApnNotificationProtocolVersion The
     *                                                      default_apn_notification_protocol_version
     * @param string $defaultGcmNotificationProtocolVersion The
     *                                                      default_gcm_notification_protocol_version
     * @param string $fcmCredentialSid The fcm_credential_sid
     * @param string $defaultFcmNotificationProtocolVersion The
     *                                                      default_fcm_notification_protocol_version
     * @param boolean $logEnabled The log_enabled
     * @param string $alexaSkillId The alexa_skill_id
     * @param string $defaultAlexaNotificationProtocolVersion The
     *                                                        default_alexa_notification_protocol_version
     */
    public function __construct($friendlyName = Values::NONE, $apnCredentialSid = Values::NONE, $gcmCredentialSid = Values::NONE, $messagingServiceSid = Values::NONE, $facebookMessengerPageId = Values::NONE, $defaultApnNotificationProtocolVersion = Values::NONE, $defaultGcmNotificationProtocolVersion = Values::NONE, $fcmCredentialSid = Values::NONE, $defaultFcmNotificationProtocolVersion = Values::NONE, $logEnabled = Values::NONE, $alexaSkillId = Values::NONE, $defaultAlexaNotificationProtocolVersion = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['apnCredentialSid'] = $apnCredentialSid;
        $this->options['gcmCredentialSid'] = $gcmCredentialSid;
        $this->options['messagingServiceSid'] = $messagingServiceSid;
        $this->options['facebookMessengerPageId'] = $facebookMessengerPageId;
        $this->options['defaultApnNotificationProtocolVersion'] = $defaultApnNotificationProtocolVersion;
        $this->options['defaultGcmNotificationProtocolVersion'] = $defaultGcmNotificationProtocolVersion;
        $this->options['fcmCredentialSid'] = $fcmCredentialSid;
        $this->options['defaultFcmNotificationProtocolVersion'] = $defaultFcmNotificationProtocolVersion;
        $this->options['logEnabled'] = $logEnabled;
        $this->options['alexaSkillId'] = $alexaSkillId;
        $this->options['defaultAlexaNotificationProtocolVersion'] = $defaultAlexaNotificationProtocolVersion;
    }

    /**
     * The friendly_name
     * 
     * @param string $friendlyName The friendly_name
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The apn_credential_sid
     * 
     * @param string $apnCredentialSid The apn_credential_sid
     * @return $this Fluent Builder
     */
    public function setApnCredentialSid($apnCredentialSid) {
        $this->options['apnCredentialSid'] = $apnCredentialSid;
        return $this;
    }

    /**
     * The gcm_credential_sid
     * 
     * @param string $gcmCredentialSid The gcm_credential_sid
     * @return $this Fluent Builder
     */
    public function setGcmCredentialSid($gcmCredentialSid) {
        $this->options['gcmCredentialSid'] = $gcmCredentialSid;
        return $this;
    }

    /**
     * The messaging_service_sid
     * 
     * @param string $messagingServiceSid The messaging_service_sid
     * @return $this Fluent Builder
     */
    public function setMessagingServiceSid($messagingServiceSid) {
        $this->options['messagingServiceSid'] = $messagingServiceSid;
        return $this;
    }

    /**
     * The facebook_messenger_page_id
     * 
     * @param string $facebookMessengerPageId The facebook_messenger_page_id
     * @return $this Fluent Builder
     */
    public function setFacebookMessengerPageId($facebookMessengerPageId) {
        $this->options['facebookMessengerPageId'] = $facebookMessengerPageId;
        return $this;
    }

    /**
     * The default_apn_notification_protocol_version
     * 
     * @param string $defaultApnNotificationProtocolVersion The
     *                                                      default_apn_notification_protocol_version
     * @return $this Fluent Builder
     */
    public function setDefaultApnNotificationProtocolVersion($defaultApnNotificationProtocolVersion) {
        $this->options['defaultApnNotificationProtocolVersion'] = $defaultApnNotificationProtocolVersion;
        return $this;
    }

    /**
     * The default_gcm_notification_protocol_version
     * 
     * @param string $defaultGcmNotificationProtocolVersion The
     *                                                      default_gcm_notification_protocol_version
     * @return $this Fluent Builder
     */
    public function setDefaultGcmNotificationProtocolVersion($defaultGcmNotificationProtocolVersion) {
        $this->options['defaultGcmNotificationProtocolVersion'] = $defaultGcmNotificationProtocolVersion;
        return $this;
    }

    /**
     * The fcm_credential_sid
     * 
     * @param string $fcmCredentialSid The fcm_credential_sid
     * @return $this Fluent Builder
     */
    public function setFcmCredentialSid($fcmCredentialSid) {
        $this->options['fcmCredentialSid'] = $fcmCredentialSid;
        return $this;
    }

    /**
     * The default_fcm_notification_protocol_version
     * 
     * @param string $defaultFcmNotificationProtocolVersion The
     *                                                      default_fcm_notification_protocol_version
     * @return $this Fluent Builder
     */
    public function setDefaultFcmNotificationProtocolVersion($defaultFcmNotificationProtocolVersion) {
        $this->options['defaultFcmNotificationProtocolVersion'] = $defaultFcmNotificationProtocolVersion;
        return $this;
    }

    /**
     * The log_enabled
     * 
     * @param boolean $logEnabled The log_enabled
     * @return $this Fluent Builder
     */
    public function setLogEnabled($logEnabled) {
        $this->options['logEnabled'] = $logEnabled;
        return $this;
    }

    /**
     * The alexa_skill_id
     * 
     * @param string $alexaSkillId The alexa_skill_id
     * @return $this Fluent Builder
     */
    public function setAlexaSkillId($alexaSkillId) {
        $this->options['alexaSkillId'] = $alexaSkillId;
        return $this;
    }

    /**
     * The default_alexa_notification_protocol_version
     * 
     * @param string $defaultAlexaNotificationProtocolVersion The
     *                                                        default_alexa_notification_protocol_version
     * @return $this Fluent Builder
     */
    public function setDefaultAlexaNotificationProtocolVersion($defaultAlexaNotificationProtocolVersion) {
        $this->options['defaultAlexaNotificationProtocolVersion'] = $defaultAlexaNotificationProtocolVersion;
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
        return '[Twilio.Notify.V1.CreateServiceOptions ' . implode(' ', $options) . ']';
    }
}

class ReadServiceOptions extends Options {
    /**
     * @param string $friendlyName The friendly_name
     */
    public function __construct($friendlyName = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * The friendly_name
     * 
     * @param string $friendlyName The friendly_name
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
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
        return '[Twilio.Notify.V1.ReadServiceOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateServiceOptions extends Options {
    /**
     * @param string $friendlyName The friendly_name
     * @param string $apnCredentialSid The apn_credential_sid
     * @param string $gcmCredentialSid The gcm_credential_sid
     * @param string $messagingServiceSid The messaging_service_sid
     * @param string $facebookMessengerPageId The facebook_messenger_page_id
     * @param string $defaultApnNotificationProtocolVersion The
     *                                                      default_apn_notification_protocol_version
     * @param string $defaultGcmNotificationProtocolVersion The
     *                                                      default_gcm_notification_protocol_version
     * @param string $fcmCredentialSid The fcm_credential_sid
     * @param string $defaultFcmNotificationProtocolVersion The
     *                                                      default_fcm_notification_protocol_version
     * @param boolean $logEnabled The log_enabled
     * @param string $alexaSkillId The alexa_skill_id
     * @param string $defaultAlexaNotificationProtocolVersion The
     *                                                        default_alexa_notification_protocol_version
     */
    public function __construct($friendlyName = Values::NONE, $apnCredentialSid = Values::NONE, $gcmCredentialSid = Values::NONE, $messagingServiceSid = Values::NONE, $facebookMessengerPageId = Values::NONE, $defaultApnNotificationProtocolVersion = Values::NONE, $defaultGcmNotificationProtocolVersion = Values::NONE, $fcmCredentialSid = Values::NONE, $defaultFcmNotificationProtocolVersion = Values::NONE, $logEnabled = Values::NONE, $alexaSkillId = Values::NONE, $defaultAlexaNotificationProtocolVersion = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['apnCredentialSid'] = $apnCredentialSid;
        $this->options['gcmCredentialSid'] = $gcmCredentialSid;
        $this->options['messagingServiceSid'] = $messagingServiceSid;
        $this->options['facebookMessengerPageId'] = $facebookMessengerPageId;
        $this->options['defaultApnNotificationProtocolVersion'] = $defaultApnNotificationProtocolVersion;
        $this->options['defaultGcmNotificationProtocolVersion'] = $defaultGcmNotificationProtocolVersion;
        $this->options['fcmCredentialSid'] = $fcmCredentialSid;
        $this->options['defaultFcmNotificationProtocolVersion'] = $defaultFcmNotificationProtocolVersion;
        $this->options['logEnabled'] = $logEnabled;
        $this->options['alexaSkillId'] = $alexaSkillId;
        $this->options['defaultAlexaNotificationProtocolVersion'] = $defaultAlexaNotificationProtocolVersion;
    }

    /**
     * The friendly_name
     * 
     * @param string $friendlyName The friendly_name
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The apn_credential_sid
     * 
     * @param string $apnCredentialSid The apn_credential_sid
     * @return $this Fluent Builder
     */
    public function setApnCredentialSid($apnCredentialSid) {
        $this->options['apnCredentialSid'] = $apnCredentialSid;
        return $this;
    }

    /**
     * The gcm_credential_sid
     * 
     * @param string $gcmCredentialSid The gcm_credential_sid
     * @return $this Fluent Builder
     */
    public function setGcmCredentialSid($gcmCredentialSid) {
        $this->options['gcmCredentialSid'] = $gcmCredentialSid;
        return $this;
    }

    /**
     * The messaging_service_sid
     * 
     * @param string $messagingServiceSid The messaging_service_sid
     * @return $this Fluent Builder
     */
    public function setMessagingServiceSid($messagingServiceSid) {
        $this->options['messagingServiceSid'] = $messagingServiceSid;
        return $this;
    }

    /**
     * The facebook_messenger_page_id
     * 
     * @param string $facebookMessengerPageId The facebook_messenger_page_id
     * @return $this Fluent Builder
     */
    public function setFacebookMessengerPageId($facebookMessengerPageId) {
        $this->options['facebookMessengerPageId'] = $facebookMessengerPageId;
        return $this;
    }

    /**
     * The default_apn_notification_protocol_version
     * 
     * @param string $defaultApnNotificationProtocolVersion The
     *                                                      default_apn_notification_protocol_version
     * @return $this Fluent Builder
     */
    public function setDefaultApnNotificationProtocolVersion($defaultApnNotificationProtocolVersion) {
        $this->options['defaultApnNotificationProtocolVersion'] = $defaultApnNotificationProtocolVersion;
        return $this;
    }

    /**
     * The default_gcm_notification_protocol_version
     * 
     * @param string $defaultGcmNotificationProtocolVersion The
     *                                                      default_gcm_notification_protocol_version
     * @return $this Fluent Builder
     */
    public function setDefaultGcmNotificationProtocolVersion($defaultGcmNotificationProtocolVersion) {
        $this->options['defaultGcmNotificationProtocolVersion'] = $defaultGcmNotificationProtocolVersion;
        return $this;
    }

    /**
     * The fcm_credential_sid
     * 
     * @param string $fcmCredentialSid The fcm_credential_sid
     * @return $this Fluent Builder
     */
    public function setFcmCredentialSid($fcmCredentialSid) {
        $this->options['fcmCredentialSid'] = $fcmCredentialSid;
        return $this;
    }

    /**
     * The default_fcm_notification_protocol_version
     * 
     * @param string $defaultFcmNotificationProtocolVersion The
     *                                                      default_fcm_notification_protocol_version
     * @return $this Fluent Builder
     */
    public function setDefaultFcmNotificationProtocolVersion($defaultFcmNotificationProtocolVersion) {
        $this->options['defaultFcmNotificationProtocolVersion'] = $defaultFcmNotificationProtocolVersion;
        return $this;
    }

    /**
     * The log_enabled
     * 
     * @param boolean $logEnabled The log_enabled
     * @return $this Fluent Builder
     */
    public function setLogEnabled($logEnabled) {
        $this->options['logEnabled'] = $logEnabled;
        return $this;
    }

    /**
     * The alexa_skill_id
     * 
     * @param string $alexaSkillId The alexa_skill_id
     * @return $this Fluent Builder
     */
    public function setAlexaSkillId($alexaSkillId) {
        $this->options['alexaSkillId'] = $alexaSkillId;
        return $this;
    }

    /**
     * The default_alexa_notification_protocol_version
     * 
     * @param string $defaultAlexaNotificationProtocolVersion The
     *                                                        default_alexa_notification_protocol_version
     * @return $this Fluent Builder
     */
    public function setDefaultAlexaNotificationProtocolVersion($defaultAlexaNotificationProtocolVersion) {
        $this->options['defaultAlexaNotificationProtocolVersion'] = $defaultAlexaNotificationProtocolVersion;
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
        return '[Twilio.Notify.V1.UpdateServiceOptions ' . implode(' ', $options) . ']';
    }
}