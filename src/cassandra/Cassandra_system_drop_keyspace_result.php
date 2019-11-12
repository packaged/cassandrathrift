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

class Cassandra_system_drop_keyspace_result extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        0 => array(
            'var' => 'success',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        1 => array(
            'var' => 'ire',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\InvalidRequestException',
        ),
        2 => array(
            'var' => 'sde',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\SchemaDisagreementException',
        ),
    );

    /**
     * @var string
     */
    public $success = null;
    /**
     * @var \cassandra\InvalidRequestException
     */
    public $ire = null;
    /**
     * @var \cassandra\SchemaDisagreementException
     */
    public $sde = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'Cassandra_system_drop_keyspace_result';
    }


    public function read($input)
    {
        return $this->_read('Cassandra_system_drop_keyspace_result', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('Cassandra_system_drop_keyspace_result', self::$_TSPEC, $output);
    }

}
