<?php
namespace cassandra;

/**
 * Autogenerated by Thrift Compiler (0.21.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

final class IndexType
{
    const KEYS = 0;

    const CUSTOM = 1;

    const COMPOSITES = 2;

    static public $__names = array(
        0 => 'KEYS',
        1 => 'CUSTOM',
        2 => 'COMPOSITES',
    );
}

