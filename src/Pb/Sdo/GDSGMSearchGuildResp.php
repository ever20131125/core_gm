<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGMSearchGuildResp message
 */
class GDSGMSearchGuildResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRGUILDINFO = 2;
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
        self::ARRGUILDINFO => array(
            'name' => 'arrGuildInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildBriefDetails'
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
        $this->values[self::ARRGUILDINFO] = array();
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
     * Appends value to 'arrGuildInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildBriefDetails $value Value to append
     *
     * @return null
     */
    public function appendArrGuildInfo(\Xnhd\Core\Pb\Sdo\GuildBriefDetails $value)
    {
        return $this->append(self::ARRGUILDINFO, $value);
    }

    /**
     * Clears 'arrGuildInfo' list
     *
     * @return null
     */
    public function clearArrGuildInfo()
    {
        return $this->clear(self::ARRGUILDINFO);
    }

    /**
     * Returns 'arrGuildInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildBriefDetails[]
     */
    public function getArrGuildInfo()
    {
        return $this->get(self::ARRGUILDINFO);
    }

    /**
     * Returns true if 'arrGuildInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGuildInfo()
    {
        return count($this->get(self::ARRGUILDINFO)) !== 0;
    }

    /**
     * Returns 'arrGuildInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGuildInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGUILDINFO));
    }

    /**
     * Returns element from 'arrGuildInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildBriefDetails
     */
    public function getArrGuildInfoAt($offset)
    {
        return $this->get(self::ARRGUILDINFO, $offset);
    }

    /**
     * Returns count of 'arrGuildInfo' list
     *
     * @return int
     */
    public function getArrGuildInfoCount()
    {
        return $this->count(self::ARRGUILDINFO);
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