<?php
namespace cassandra;

/**
 * Autogenerated by Thrift Compiler (0.15.0)
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

/**
 * A specific column was requested that does not exist.
 */
class NotFoundException extends TException
{
    static public $isValidate = true;

    static public $_TSPEC = array(
    );


    public function __construct()
    {
    }

    public function getName()
    {
        return 'NotFoundException';
    }


    public function read($input)
    {
        return $this->_read('NotFoundException', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('NotFoundException', self::$_TSPEC, $output);
    }

}
