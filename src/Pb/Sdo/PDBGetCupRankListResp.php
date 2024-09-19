<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetCupRankListResp message
 */
class PDBGetCupRankListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRROLEIDLIST = 2;
    const ARRCUPINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRROLEIDLIST => array(
            'name' => 'arrRoleIDList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRCUPINFO => array(
            'name' => 'arrCupInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\CupInfo'
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ARRROLEIDLIST] = array();
        $this->values[self::ARRCUPINFO] = array();
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Appends value to 'arrRoleIDList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleIDList($value)
    {
        return $this->append(self::ARRROLEIDLIST, $value);
    }

    /**
     * Clears 'arrRoleIDList' list
     *
     * @return null
     */
    public function clearArrRoleIDList()
    {
        return $this->clear(self::ARRROLEIDLIST);
    }

    /**
     * Returns 'arrRoleIDList' list
     *
     * @return integer[]
     */
    public function getArrRoleIDList()
    {
        return $this->get(self::ARRROLEIDLIST);
    }

    /**
     * Returns true if 'arrRoleIDList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleIDList()
    {
        return count($this->get(self::ARRROLEIDLIST)) !== 0;
    }

    /**
     * Returns 'arrRoleIDList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEIDLIST));
    }

    /**
     * Returns element from 'arrRoleIDList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDListAt($offset)
    {
        return $this->get(self::ARRROLEIDLIST, $offset);
    }

    /**
     * Returns count of 'arrRoleIDList' list
     *
     * @return int
     */
    public function getArrRoleIDListCount()
    {
        return $this->count(self::ARRROLEIDLIST);
    }

    /**
     * Appends value to 'arrCupInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\CupInfo $value Value to append
     *
     * @return null
     */
    public function appendArrCupInfo(\Xnhd\Core\Pb\Sdo\CupInfo $value)
    {
        return $this->append(self::ARRCUPINFO, $value);
    }

    /**
     * Clears 'arrCupInfo' list
     *
     * @return null
     */
    public function clearArrCupInfo()
    {
        return $this->clear(self::ARRCUPINFO);
    }

    /**
     * Returns 'arrCupInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\CupInfo[]
     */
    public function getArrCupInfo()
    {
        return $this->get(self::ARRCUPINFO);
    }

    /**
     * Returns true if 'arrCupInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCupInfo()
    {
        return count($this->get(self::ARRCUPINFO)) !== 0;
    }

    /**
     * Returns 'arrCupInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCupInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCUPINFO));
    }

    /**
     * Returns element from 'arrCupInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\CupInfo
     */
    public function getArrCupInfoAt($offset)
    {
        return $this->get(self::ARRCUPINFO, $offset);
    }

    /**
     * Returns count of 'arrCupInfo' list
     *
     * @return int
     */
    public function getArrCupInfoCount()
    {
        return $this->count(self::ARRCUPINFO);
    }
}
}