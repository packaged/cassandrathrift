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
 * A Mutation is either an insert (represented by filling column_or_supercolumn) or a deletion (represented by filling the deletion attribute).
 * @param column_or_supercolumn. An insert to a column or supercolumn (possibly counter column or supercolumn)
 * @param deletion. A deletion of a column or supercolumn
 */
class Mutation extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'column_or_supercolumn',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\ColumnOrSuperColumn',
        ),
        2 => array(
            'var' => 'deletion',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\Deletion',
        ),
    );

    /**
     * @var \cassandra\ColumnOrSuperColumn
     */
    public $column_or_supercolumn = null;
    /**
     * @var \cassandra\Deletion
     */
    public $deletion = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'Mutation';
    }


    public function read($input)
    {
        return $this->_read('Mutation', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('Mutation', self::$_TSPEC, $output);
    }

}
