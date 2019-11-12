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
 * A KeySlice is key followed by the data it maps to. A collection of KeySlice is returned by the get_range_slice operation.
 * 
 * @param key. a row key
 * @param columns. List of data represented by the key. Typically, the list is pared down to only the columns specified by
 *                 a SlicePredicate.
 */
class KeySlice extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'key',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'columns',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\cassandra\ColumnOrSuperColumn',
                ),
        ),
    );

    /**
     * @var string
     */
    public $key = null;
    /**
     * @var \cassandra\ColumnOrSuperColumn[]
     */
    public $columns = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'KeySlice';
    }


    public function read($input)
    {
        $tmp = $this->_read('KeySlice', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('KeySlice', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->key === null) {
            throw new TProtocolException('Required field KeySlice.key is unset!');
        }
        if ($this->columns === null) {
            throw new TProtocolException('Required field KeySlice.columns is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->key === null) {
            throw new TProtocolException('Required field KeySlice.key is unset!');
        }
        if ($this->columns === null) {
            throw new TProtocolException('Required field KeySlice.columns is unset!');
        }
    }
}
