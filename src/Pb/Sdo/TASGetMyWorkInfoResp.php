<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASGetMyWorkInfoResp message
 */
class TASGetMyWorkInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRALBUMLIST = 2;
    const ARRWORKLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRALBUMLIST => array(
            'name' => 'arrAlbumList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AlbumInfo'
        ),
        self::ARRWORKLIST => array(
            'name' => 'arrWorkList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\WorkDetailInfo'
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
        $this->values[self::ARRALBUMLIST] = array();
        $this->values[self::ARRWORKLIST] = array();
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
     * Appends value to 'arrAlbumList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AlbumInfo $value Value to append
     *
     * @return null
     */
    public function appendArrAlbumList(\Xnhd\Core\Pb\Sdo\AlbumInfo $value)
    {
        return $this->append(self::ARRALBUMLIST, $value);
    }

    /**
     * Clears 'arrAlbumList' list
     *
     * @return null
     */
    public function clearArrAlbumList()
    {
        return $this->clear(self::ARRALBUMLIST);
    }

    /**
     * Returns 'arrAlbumList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AlbumInfo[]
     */
    public function getArrAlbumList()
    {
        return $this->get(self::ARRALBUMLIST);
    }

    /**
     * Returns true if 'arrAlbumList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAlbumList()
    {
        return count($this->get(self::ARRALBUMLIST)) !== 0;
    }

    /**
     * Returns 'arrAlbumList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAlbumListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRALBUMLIST));
    }

    /**
     * Returns element from 'arrAlbumList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AlbumInfo
     */
    public function getArrAlbumListAt($offset)
    {
        return $this->get(self::ARRALBUMLIST, $offset);
    }

    /**
     * Returns count of 'arrAlbumList' list
     *
     * @return int
     */
    public function getArrAlbumListCount()
    {
        return $this->count(self::ARRALBUMLIST);
    }

    /**
     * Appends value to 'arrWorkList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\WorkDetailInfo $value Value to append
     *
     * @return null
     */
    public function appendArrWorkList(\Xnhd\Core\Pb\Sdo\WorkDetailInfo $value)
    {
        return $this->append(self::ARRWORKLIST, $value);
    }

    /**
     * Clears 'arrWorkList' list
     *
     * @return null
     */
    public function clearArrWorkList()
    {
        return $this->clear(self::ARRWORKLIST);
    }

    /**
     * Returns 'arrWorkList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\WorkDetailInfo[]
     */
    public function getArrWorkList()
    {
        return $this->get(self::ARRWORKLIST);
    }

    /**
     * Returns true if 'arrWorkList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrWorkList()
    {
        return count($this->get(self::ARRWORKLIST)) !== 0;
    }

    /**
     * Returns 'arrWorkList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrWorkListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRWORKLIST));
    }

    /**
     * Returns element from 'arrWorkList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\WorkDetailInfo
     */
    public function getArrWorkListAt($offset)
    {
        return $this->get(self::ARRWORKLIST, $offset);
    }

    /**
     * Returns count of 'arrWorkList' list
     *
     * @return int
     */
    public function getArrWorkListCount()
    {
        return $this->count(self::ARRWORKLIST);
    }
}
}