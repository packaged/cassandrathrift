<?php
namespace cassandra;

/**
 * Autogenerated by Thrift Compiler (0.22.0)
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
 * NOTE: This up outdated exception left for backward compatibility reasons,
 * no actual schema agreement validation is done starting from Cassandra 1.2
 * 
 * schemas are not in agreement across all nodes
 */
class SchemaDisagreementException extends TException
{
    static public $isValidate = true;

    static public $_TSPEC = array(
    );


    public function __construct()
    {
    }

    public function getName()
    {
        return 'SchemaDisagreementException';
    }


    public function read($input)
    {
        return $this->_read('SchemaDisagreementException', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('SchemaDisagreementException', self::$_TSPEC, $output);
    }

}
