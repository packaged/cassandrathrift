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

class CqlMetadata extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'name_types',
            'isRequired' => true,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::STRING,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::STRING,
                ),
        ),
        2 => array(
            'var' => 'value_types',
            'isRequired' => true,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::STRING,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::STRING,
                ),
        ),
        3 => array(
            'var' => 'default_name_type',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'default_value_type',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var array
     */
    public $name_types = null;
    /**
     * @var array
     */
    public $value_types = null;
    /**
     * @var string
     */
    public $default_name_type = null;
    /**
     * @var string
     */
    public $default_value_type = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'CqlMetadata';
    }


    public function read($input)
    {
        $tmp = $this->_read('CqlMetadata', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('CqlMetadata', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->name_types === null) {
            throw new TProtocolException('Required field CqlMetadata.name_types is unset!');
        }
        if ($this->value_types === null) {
            throw new TProtocolException('Required field CqlMetadata.value_types is unset!');
        }
        if ($this->default_name_type === null) {
            throw new TProtocolException('Required field CqlMetadata.default_name_type is unset!');
        }
        if ($this->default_value_type === null) {
            throw new TProtocolException('Required field CqlMetadata.default_value_type is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->name_types === null) {
            throw new TProtocolException('Required field CqlMetadata.name_types is unset!');
        }
        if ($this->value_types === null) {
            throw new TProtocolException('Required field CqlMetadata.value_types is unset!');
        }
        if ($this->default_name_type === null) {
            throw new TProtocolException('Required field CqlMetadata.default_name_type is unset!');
        }
        if ($this->default_value_type === null) {
            throw new TProtocolException('Required field CqlMetadata.default_value_type is unset!');
        }
    }
}
