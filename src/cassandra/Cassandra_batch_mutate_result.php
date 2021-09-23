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

class Cassandra_batch_mutate_result extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'ire',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\InvalidRequestException',
        ),
        2 => array(
            'var' => 'ue',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\UnavailableException',
        ),
        3 => array(
            'var' => 'te',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\TimedOutException',
        ),
    );

    /**
     * @var \cassandra\InvalidRequestException
     */
    public $ire = null;
    /**
     * @var \cassandra\UnavailableException
     */
    public $ue = null;
    /**
     * @var \cassandra\TimedOutException
     */
    public $te = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'Cassandra_batch_mutate_result';
    }


    public function read($input)
    {
        return $this->_read('Cassandra_batch_mutate_result', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('Cassandra_batch_mutate_result', self::$_TSPEC, $output);
    }

}
