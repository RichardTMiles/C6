<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * If set, the detailed findings will be persisted to the specified
 * OutputStorageConfig. Compatible with: Inspect
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.Action.SaveFindings</code>
 */
class Action_SaveFindings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.OutputStorageConfig output_config = 1;</code>
     */
    private $output_config = null;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.OutputStorageConfig output_config = 1;</code>
     * @return \Google\Cloud\Dlp\V2\OutputStorageConfig
     */
    public function getOutputConfig()
    {
        return $this->output_config;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.OutputStorageConfig output_config = 1;</code>
     * @param \Google\Cloud\Dlp\V2\OutputStorageConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\OutputStorageConfig::class);
        $this->output_config = $var;

        return $this;
    }

}

