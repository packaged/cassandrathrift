<?php
namespace cassandra;

/**
 * Autogenerated by Thrift Compiler (0.12.0)
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

class Cassandra_describe_keyspaces_args extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
    );


    public function __construct()
    {
    }

    public function getName()
    {
        return 'Cassandra_describe_keyspaces_args';
    }


    public function read($input)
    {
        return $this->_read('Cassandra_describe_keyspaces_args', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('Cassandra_describe_keyspaces_args', self::$_TSPEC, $output);
    }

}
