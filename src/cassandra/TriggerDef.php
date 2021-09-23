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
 * Describes a trigger.
 * `options` should include at least 'class' param.
 * Other options are not supported yet.
 */
class TriggerDef extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'name',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'options',
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
    );

    /**
     * @var string
     */
    public $name = null;
    /**
     * @var array
     */
    public $options = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'TriggerDef';
    }


    public function read($input)
    {
        $tmp = $this->_read('TriggerDef', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('TriggerDef', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->name === null) {
            throw new TProtocolException('Required field TriggerDef.name is unset!');
        }
        if ($this->options === null) {
            throw new TProtocolException('Required field TriggerDef.options is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->name === null) {
            throw new TProtocolException('Required field TriggerDef.name is unset!');
        }
        if ($this->options === null) {
            throw new TProtocolException('Required field TriggerDef.options is unset!');
        }
    }
}
