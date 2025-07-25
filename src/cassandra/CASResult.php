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

class CASResult extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'success',
            'isRequired' => true,
            'type' => TType::BOOL,
        ),
        2 => array(
            'var' => 'current_values',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\cassandra\Column',
                ),
        ),
    );

    /**
     * @var bool
     */
    public $success = null;
    /**
     * @var \cassandra\Column[]
     */
    public $current_values = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'CASResult';
    }


    public function read($input)
    {
        $tmp = $this->_read('CASResult', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('CASResult', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->success === null) {
            throw new TProtocolException('Required field CASResult.success is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->success === null) {
            throw new TProtocolException('Required field CASResult.success is unset!');
        }
    }
}
