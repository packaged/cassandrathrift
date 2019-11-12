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
 * Methods for fetching rows/records from Cassandra will return either a single instance of ColumnOrSuperColumn or a list
 * of ColumnOrSuperColumns (get_slice()). If you're looking up a SuperColumn (or list of SuperColumns) then the resulting
 * instances of ColumnOrSuperColumn will have the requested SuperColumn in the attribute super_column. For queries resulting
 * in Columns, those values will be in the attribute column. This change was made between 0.3 and 0.4 to standardize on
 * single query methods that may return either a SuperColumn or Column.
 * 
 * If the query was on a counter column family, you will either get a counter_column (instead of a column) or a
 * counter_super_column (instead of a super_column)
 * 
 * @param column. The Column returned by get() or get_slice().
 * @param super_column. The SuperColumn returned by get() or get_slice().
 * @param counter_column. The Counterolumn returned by get() or get_slice().
 * @param counter_super_column. The CounterSuperColumn returned by get() or get_slice().
 */
class ColumnOrSuperColumn extends TBase
{
    static public $isValidate = true;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'column',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\Column',
        ),
        2 => array(
            'var' => 'super_column',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\SuperColumn',
        ),
        3 => array(
            'var' => 'counter_column',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\CounterColumn',
        ),
        4 => array(
            'var' => 'counter_super_column',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\cassandra\CounterSuperColumn',
        ),
    );

    /**
     * @var \cassandra\Column
     */
    public $column = null;
    /**
     * @var \cassandra\SuperColumn
     */
    public $super_column = null;
    /**
     * @var \cassandra\CounterColumn
     */
    public $counter_column = null;
    /**
     * @var \cassandra\CounterSuperColumn
     */
    public $counter_super_column = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName()
    {
        return 'ColumnOrSuperColumn';
    }


    public function read($input)
    {
        return $this->_read('ColumnOrSuperColumn', self::$_TSPEC, $input);
    }


    public function write($output)
    {
        return $this->_write('ColumnOrSuperColumn', self::$_TSPEC, $output);
    }

}