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

class Cassandra_get_slice_args extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'key',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'column_parent',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\cassandra\ColumnParent',
        ),
        3 => array(
            'var' => 'predicate',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\cassandra\SlicePredicate',
        ),
        4 => array(
            'var' => 'consistency_level',
            'isRequired' => true,
            'type' => TType::I32,
        ),
    );

    /**
     * @var string
     */
    public $key = null;
    /**
     * @var \cassandra\ColumnParent
     */
    public $column_parent = null;
    /**
     * @var \cassandra\SlicePredicate
     */
    public $predicate = null;
    /**
     * @var int
     */
    public $consistency_level =     1;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'Cassandra_get_slice_args';
    }


    public function read($input)
    {
        $tmp = $this->_read('Cassandra_get_slice_args', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('Cassandra_get_slice_args', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->key === null) {
            throw new TProtocolException('Required field Cassandra_get_slice_args.key is unset!');
        }
        if ($this->column_parent === null) {
            throw new TProtocolException('Required field Cassandra_get_slice_args.column_parent is unset!');
        }
        if ($this->predicate === null) {
            throw new TProtocolException('Required field Cassandra_get_slice_args.predicate is unset!');
        }
        if ($this->consistency_level === null) {
            throw new TProtocolException('Required field Cassandra_get_slice_args.consistency_level is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->key === null) {
            throw new TProtocolException('Required field Cassandra_get_slice_args.key is unset!');
        }
        if ($this->column_parent === null) {
            throw new TProtocolException('Required field Cassandra_get_slice_args.column_parent is unset!');
        }
        if ($this->predicate === null) {
            throw new TProtocolException('Required field Cassandra_get_slice_args.predicate is unset!');
        }
        if ($this->consistency_level === null) {
            throw new TProtocolException('Required field Cassandra_get_slice_args.consistency_level is unset!');
        }
    }
}
