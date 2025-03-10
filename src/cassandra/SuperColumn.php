<?php
namespace cassandra;

/**
 * Autogenerated by Thrift Compiler (0.21.0)
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
 * A named list of columns.
 * @param name. see Column.name.
 * @param columns. A collection of standard Columns.  The columns within a super column are defined in an adhoc manner.
 *                 Columns within a super column do not have to have matching structures (similarly named child columns).
 */
class SuperColumn extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'name',
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
                'class' => '\cassandra\Column',
                ),
        ),
    );

    /**
     * @var string
     */
    public $name = null;
    /**
     * @var \cassandra\Column[]
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
        return 'SuperColumn';
    }


    public function read($input)
    {
        $tmp = $this->_read('SuperColumn', self::$_TSPEC, $input);
        $this->_validateForRead();
        return $tmp;
    }


    public function write($output)
    {
        $this->_validateForWrite();
        return $this->_write('SuperColumn', self::$_TSPEC, $output);
    }


    private function _validateForRead() {
        if ($this->name === null) {
            throw new TProtocolException('Required field SuperColumn.name is unset!');
        }
        if ($this->columns === null) {
            throw new TProtocolException('Required field SuperColumn.columns is unset!');
        }
    }

    private function _validateForWrite() {
        if ($this->name === null) {
            throw new TProtocolException('Required field SuperColumn.name is unset!');
        }
        if ($this->columns === null) {
            throw new TProtocolException('Required field SuperColumn.columns is unset!');
        }
    }
}
