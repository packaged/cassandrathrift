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

/**
 * Note that the timestamp is only optional in case of counter deletion.
 */
class Deletion extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'timestamp',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'super_column',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'predicate',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\SlicePredicate',
        ),
    );

    /**
     * @var int
     */
    public $timestamp = null;
    /**
     * @var string
     */
    public $super_column = null;
    /**
     * @var \cassandra\SlicePredicate
     */
    public $predicate = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'Deletion';
    }


    public function read($input)
    {
        return $this->_read('Deletion', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('Deletion', self::$_TSPEC, $output);
    }

}
