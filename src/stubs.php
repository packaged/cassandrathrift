<?php

/**
 * @param $transport     object
 * @param $methodName    string
 * @param $messageType   int
 * @param $requestObject object
 * @param $sequenceId    int
 * @param $strictWrite   bool
 */
function thrift_protocol_write_binary($transport, $methodName, $messageType, $requestObject, $sequenceId, $strictWrite) {}

/**
 * @param $transport     object
 * @param $responseClass string
 * @param $strictRead    bool
 *
 * @return \Thrift\Base\TBase
 */
function thrift_protocol_read_binary($transport, $responseClass, $strictRead) {}
