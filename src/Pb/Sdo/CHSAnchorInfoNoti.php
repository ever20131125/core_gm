<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSAnchorInfoNoti message
 */
class CHSAnchorInfoNoti extends \ProtobufMessage
{
    /* Field index constants */
    const INFOS = 1;
    const LIKES = 2;
    const TYPE = 3;
    const TITLE = 4;
    const TEXT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INFOS => array(
            'name' => 'infos',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AnchorInfo'
        ),
        self::LIKES => array(
            'name' => 'likes',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AnchorLike'
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TEXT => array(
            'name' => 'text',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::INFOS] = array();
        $this->values[self::LIKES] = array();
        $this->values[self::TYPE] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::TEXT] = null;
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
     * Appends value to 'infos' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AnchorInfo $value Value to append
     *
     * @return null
     */
    public function appendInfos(\Xnhd\Core\Pb\Sdo\AnchorInfo $value)
    {
        return $this->append(self::INFOS, $value);
    }

    /**
     * Clears 'infos' list
     *
     * @return null
     */
    public function clearInfos()
    {
        return $this->clear(self::INFOS);
    }

    /**
     * Returns 'infos' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AnchorInfo[]
     */
    public function getInfos()
    {
        return $this->get(self::INFOS);
    }

    /**
     * Returns true if 'infos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInfos()
    {
        return count($this->get(self::INFOS)) !== 0;
    }

    /**
     * Returns 'infos' iterator
     *
     * @return \ArrayIterator
     */
    public function getInfosIterator()
    {
        return new \ArrayIterator($this->get(self::INFOS));
    }

    /**
     * Returns element from 'infos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AnchorInfo
     */
    public function getInfosAt($offset)
    {
        return $this->get(self::INFOS, $offset);
    }

    /**
     * Returns count of 'infos' list
     *
     * @return int
     */
    public function getInfosCount()
    {
        return $this->count(self::INFOS);
    }

    /**
     * Appends value to 'likes' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AnchorLike $value Value to append
     *
     * @return null
     */
    public function appendLikes(\Xnhd\Core\Pb\Sdo\AnchorLike $value)
    {
        return $this->append(self::LIKES, $value);
    }

    /**
     * Clears 'likes' list
     *
     * @return null
     */
    public function clearLikes()
    {
        return $this->clear(self::LIKES);
    }

    /**
     * Returns 'likes' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AnchorLike[]
     */
    public function getLikes()
    {
        return $this->get(self::LIKES);
    }

    /**
     * Returns true if 'likes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLikes()
    {
        return count($this->get(self::LIKES)) !== 0;
    }

    /**
     * Returns 'likes' iterator
     *
     * @return \ArrayIterator
     */
    public function getLikesIterator()
    {
        return new \ArrayIterator($this->get(self::LIKES));
    }

    /**
     * Returns element from 'likes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AnchorLike
     */
    public function getLikesAt($offset)
    {
        return $this->get(self::LIKES, $offset);
    }

    /**
     * Returns count of 'likes' list
     *
     * @return int
     */
    public function getLikesCount()
    {
        return $this->count(self::LIKES);
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle()
    {
        $value = $this->get(self::TITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'title' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTitle()
    {
        return $this->get(self::TITLE) !== null;
    }

    /**
     * Sets value of 'text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setText($value)
    {
        return $this->set(self::TEXT, $value);
    }

    /**
     * Returns value of 'text' property
     *
     * @return string
     */
    public function getText()
    {
        $value = $this->get(self::TEXT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'text' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasText()
    {
        return $this->get(self::TEXT) !== null;
    }
}
}