<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkeconnect/gateway/v1beta1/control.proto

namespace Google\Cloud\GkeConnect\Gateway\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Connection information for a particular membership.
 *
 * Generated from protobuf message <code>google.cloud.gkeconnect.gateway.v1beta1.GenerateCredentialsResponse</code>
 */
class GenerateCredentialsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A full YAML kubeconfig in serialized format.
     *
     * Generated from protobuf field <code>bytes kubeconfig = 1;</code>
     */
    private $kubeconfig = '';
    /**
     * The generated URI of the cluster as accessed through the Connect Gateway
     * API.
     *
     * Generated from protobuf field <code>string endpoint = 2;</code>
     */
    private $endpoint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kubeconfig
     *           A full YAML kubeconfig in serialized format.
     *     @type string $endpoint
     *           The generated URI of the cluster as accessed through the Connect Gateway
     *           API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkeconnect\Gateway\V1Beta1\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * A full YAML kubeconfig in serialized format.
     *
     * Generated from protobuf field <code>bytes kubeconfig = 1;</code>
     * @return string
     */
    public function getKubeconfig()
    {
        return $this->kubeconfig;
    }

    /**
     * A full YAML kubeconfig in serialized format.
     *
     * Generated from protobuf field <code>bytes kubeconfig = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKubeconfig($var)
    {
        GPBUtil::checkString($var, False);
        $this->kubeconfig = $var;

        return $this;
    }

    /**
     * The generated URI of the cluster as accessed through the Connect Gateway
     * API.
     *
     * Generated from protobuf field <code>string endpoint = 2;</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * The generated URI of the cluster as accessed through the Connect Gateway
     * API.
     *
     * Generated from protobuf field <code>string endpoint = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

}
