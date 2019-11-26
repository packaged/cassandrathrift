<?php
namespace cassandra;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
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

class Cassandra_prepare_cql_query_result extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        0 => array(
            'var' => 'success',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\CqlPreparedResult',
        ),
        1 => array(
            'var' => 'ire',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\InvalidRequestException',
        ),
    );

    /**
     * @var \cassandra\CqlPreparedResult
     */
    public $success = null;
    /**
     * @var \cassandra\InvalidRequestException
     */
    public $ire = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'Cassandra_prepare_cql_query_result';
    }


    public function read($input)
    {
        return $this->_read('Cassandra_prepare_cql_query_result', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('Cassandra_prepare_cql_query_result', self::$_TSPEC, $output);
    }

}
