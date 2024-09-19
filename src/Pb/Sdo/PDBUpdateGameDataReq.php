<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBUpdateGameDataReq message
 */
class PDBUpdateGameDataReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRROLEDATATYPE = 2;
    const ARRVALUE = 3;
    const ARRUPDATEMEANS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLEDATATYPE => array(
            'name' => 'arrRoleDataType',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRVALUE => array(
            'name' => 'arrValue',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRUPDATEMEANS => array(
            'name' => 'arrUpdateMeans',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRROLEDATATYPE] = array();
        $this->values[self::ARRVALUE] = array();
        $this->values[self::ARRUPDATEMEANS] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Appends value to 'arrRoleDataType' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleDataType($value)
    {
        return $this->append(self::ARRROLEDATATYPE, $value);
    }

    /**
     * Clears 'arrRoleDataType' list
     *
     * @return null
     */
    public function clearArrRoleDataType()
    {
        return $this->clear(self::ARRROLEDATATYPE);
    }

    /**
     * Returns 'arrRoleDataType' list
     *
     * @return integer[]
     */
    public function getArrRoleDataType()
    {
        return $this->get(self::ARRROLEDATATYPE);
    }

    /**
     * Returns true if 'arrRoleDataType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleDataType()
    {
        return count($this->get(self::ARRROLEDATATYPE)) !== 0;
    }

    /**
     * Returns 'arrRoleDataType' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleDataTypeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEDATATYPE));
    }

    /**
     * Returns element from 'arrRoleDataType' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleDataTypeAt($offset)
    {
        return $this->get(self::ARRROLEDATATYPE, $offset);
    }

    /**
     * Returns count of 'arrRoleDataType' list
     *
     * @return int
     */
    public function getArrRoleDataTypeCount()
    {
        return $this->count(self::ARRROLEDATATYPE);
    }

    /**
     * Appends value to 'arrValue' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrValue($value)
    {
        return $this->append(self::ARRVALUE, $value);
    }

    /**
     * Clears 'arrValue' list
     *
     * @return null
     */
    public function clearArrValue()
    {
        return $this->clear(self::ARRVALUE);
    }

    /**
     * Returns 'arrValue' list
     *
     * @return integer[]
     */
    public function getArrValue()
    {
        return $this->get(self::ARRVALUE);
    }

    /**
     * Returns true if 'arrValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrValue()
    {
        return count($this->get(self::ARRVALUE)) !== 0;
    }

    /**
     * Returns 'arrValue' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrValueIterator()
    {
        return new \ArrayIterator($this->get(self::ARRVALUE));
    }

    /**
     * Returns element from 'arrValue' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrValueAt($offset)
    {
        return $this->get(self::ARRVALUE, $offset);
    }

    /**
     * Returns count of 'arrValue' list
     *
     * @return int
     */
    public function getArrValueCount()
    {
        return $this->count(self::ARRVALUE);
    }

    /**
     * Appends value to 'arrUpdateMeans' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrUpdateMeans($value)
    {
        return $this->append(self::ARRUPDATEMEANS, $value);
    }

    /**
     * Clears 'arrUpdateMeans' list
     *
     * @return null
     */
    public function clearArrUpdateMeans()
    {
        return $this->clear(self::ARRUPDATEMEANS);
    }

    /**
     * Returns 'arrUpdateMeans' list
     *
     * @return integer[]
     */
    public function getArrUpdateMeans()
    {
        return $this->get(self::ARRUPDATEMEANS);
    }

    /**
     * Returns true if 'arrUpdateMeans' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrUpdateMeans()
    {
        return count($this->get(self::ARRUPDATEMEANS)) !== 0;
    }

    /**
     * Returns 'arrUpdateMeans' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrUpdateMeansIterator()
    {
        return new \ArrayIterator($this->get(self::ARRUPDATEMEANS));
    }

    /**
     * Returns element from 'arrUpdateMeans' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrUpdateMeansAt($offset)
    {
        return $this->get(self::ARRUPDATEMEANS, $offset);
    }

    /**
     * Returns count of 'arrUpdateMeans' list
     *
     * @return int
     */
    public function getArrUpdateMeansCount()
    {
        return $this->count(self::ARRUPDATEMEANS);
    }
}
}