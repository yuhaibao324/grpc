<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/control.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * presence of SecurityParams implies use of TLS
 * </pre>
 *
 * Protobuf type <code>grpc.testing.SecurityParams</code>
 */
class SecurityParams extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool use_test_ca = 1;</code>
     */
    private $use_test_ca = false;
    /**
     * <code>string server_host_override = 2;</code>
     */
    private $server_host_override = '';

    public function __construct() {
        \GPBMetadata\Src\Proto\Grpc\Testing\Control::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool use_test_ca = 1;</code>
     */
    public function getUseTestCa()
    {
        return $this->use_test_ca;
    }

    /**
     * <code>bool use_test_ca = 1;</code>
     */
    public function setUseTestCa($var)
    {
        GPBUtil::checkBool($var);
        $this->use_test_ca = $var;
    }

    /**
     * <code>string server_host_override = 2;</code>
     */
    public function getServerHostOverride()
    {
        return $this->server_host_override;
    }

    /**
     * <code>string server_host_override = 2;</code>
     */
    public function setServerHostOverride($var)
    {
        GPBUtil::checkString($var, True);
        $this->server_host_override = $var;
    }

}

