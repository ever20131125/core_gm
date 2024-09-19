<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGMSearchGuildManageResp message
 */
class GDSGMSearchGuildManageResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRGUILDMANAGE = 2;
    const NPAGENUM = 3;
    const NPAGESIZE = 4;
    const NCOUNT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRGUILDMANAGE => array(
            'name' => 'arrGuildManage',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildManage'
        ),
        self::NPAGENUM => array(
            'name' => 'nPageNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPAGESIZE => array(
            'name' => 'nPageSize',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOUNT => array(
            'name' => 'nCount',
            'required' => false,
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ARRGUILDMANAGE] = array();
        $this->values[self::NPAGENUM] = null;
        $this->values[self::NPAGESIZE] = null;
        $this->values[self::NCOUNT] = null;
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
     * Appends value to 'arrGuildManage' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildManage $value Value to append
     *
     * @return null
     */
    public function appendArrGuildManage(\Xnhd\Core\Pb\Sdo\GuildManage $value)
    {
        return $this->append(self::ARRGUILDMANAGE, $value);
    }

    /**
     * Clears 'arrGuildManage' list
     *
     * @return null
     */
    public function clearArrGuildManage()
    {
        return $this->clear(self::ARRGUILDMANAGE);
    }

    /**
     * Returns 'arrGuildManage' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildManage[]
     */
    public function getArrGuildManage()
    {
        return $this->get(self::ARRGUILDMANAGE);
    }

    /**
     * Returns true if 'arrGuildManage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGuildManage()
    {
        return count($this->get(self::ARRGUILDMANAGE)) !== 0;
    }

    /**
     * Returns 'arrGuildManage' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGuildManageIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGUILDMANAGE));
    }

    /**
     * Returns element from 'arrGuildManage' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildManage
     */
    public function getArrGuildManageAt($offset)
    {
        return $this->get(self::ARRGUILDMANAGE, $offset);
    }

    /**
     * Returns count of 'arrGuildManage' list
     *
     * @return int
     */
    public function getArrGuildManageCount()
    {
        return $this->count(self::ARRGUILDMANAGE);
    }

    /**
     * Sets value of 'nPageNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPageNum($value)
    {
        return $this->set(self::NPAGENUM, $value);
    }

    /**
     * Returns value of 'nPageNum' property
     *
     * @return integer
     */
    public function getNPageNum()
    {
        $value = $this->get(self::NPAGENUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPageNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPageNum()
    {
        return $this->get(self::NPAGENUM) !== null;
    }

    /**
     * Sets value of 'nPageSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPageSize($value)
    {
        return $this->set(self::NPAGESIZE, $value);
    }

    /**
     * Returns value of 'nPageSize' property
     *
     * @return integer
     */
    public function getNPageSize()
    {
        $value = $this->get(self::NPAGESIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPageSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPageSize()
    {
        return $this->get(self::NPAGESIZE) !== null;
    }

    /**
     * Sets value of 'nCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCount($value)
    {
        return $this->set(self::NCOUNT, $value);
    }

    /**
     * Returns value of 'nCount' property
     *
     * @return integer
     */
    public function getNCount()
    {
        $value = $this->get(self::NCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCount()
    {
        return $this->get(self::NCOUNT) !== null;
    }
}
}