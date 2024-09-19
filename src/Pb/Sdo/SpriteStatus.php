<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SpriteStatus message
 */
class SpriteStatus extends \ProtobufMessage
{
    /* Field index constants */
    const PROPERTY = 1;
    const WORK = 2;
    const FEEDSELF = 3;
    const CONSUMEINFEEDBYLOVER = 4;
    const FEEDLOVER = 5;
    const CONSUMEINFEEDLOVER = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PROPERTY => array(
            'name' => 'property',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\SpriteProperty'
        ),
        self::WORK => array(
            'name' => 'work',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\WorkStatus'
        ),
        self::FEEDSELF => array(
            'name' => 'feedSelf',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\FeedStatus'
        ),
        self::CONSUMEINFEEDBYLOVER => array(
            'name' => 'consumeInFeedByLover',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ConsumeInFeed'
        ),
        self::FEEDLOVER => array(
            'name' => 'feedLover',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\FeedStatus'
        ),
        self::CONSUMEINFEEDLOVER => array(
            'name' => 'consumeInFeedLover',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ConsumeInFeed'
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
        $this->values[self::PROPERTY] = null;
        $this->values[self::WORK] = null;
        $this->values[self::FEEDSELF] = array();
        $this->values[self::CONSUMEINFEEDBYLOVER] = array();
        $this->values[self::FEEDLOVER] = array();
        $this->values[self::CONSUMEINFEEDLOVER] = array();
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
     * Sets value of 'property' property
     *
     * @param \Xnhd\Core\Pb\Sdo\SpriteProperty $value Property value
     *
     * @return null
     */
    public function setProperty(\Xnhd\Core\Pb\Sdo\SpriteProperty $value=null)
    {
        return $this->set(self::PROPERTY, $value);
    }

    /**
     * Returns value of 'property' property
     *
     * @return \Xnhd\Core\Pb\Sdo\SpriteProperty
     */
    public function getProperty()
    {
        return $this->get(self::PROPERTY);
    }

    /**
     * Returns true if 'property' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProperty()
    {
        return $this->get(self::PROPERTY) !== null;
    }

    /**
     * Sets value of 'work' property
     *
     * @param \Xnhd\Core\Pb\Sdo\WorkStatus $value Property value
     *
     * @return null
     */
    public function setWork(\Xnhd\Core\Pb\Sdo\WorkStatus $value=null)
    {
        return $this->set(self::WORK, $value);
    }

    /**
     * Returns value of 'work' property
     *
     * @return \Xnhd\Core\Pb\Sdo\WorkStatus
     */
    public function getWork()
    {
        return $this->get(self::WORK);
    }

    /**
     * Returns true if 'work' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWork()
    {
        return $this->get(self::WORK) !== null;
    }

    /**
     * Appends value to 'feedSelf' list
     *
     * @param \Xnhd\Core\Pb\Sdo\FeedStatus $value Value to append
     *
     * @return null
     */
    public function appendFeedSelf(\Xnhd\Core\Pb\Sdo\FeedStatus $value)
    {
        return $this->append(self::FEEDSELF, $value);
    }

    /**
     * Clears 'feedSelf' list
     *
     * @return null
     */
    public function clearFeedSelf()
    {
        return $this->clear(self::FEEDSELF);
    }

    /**
     * Returns 'feedSelf' list
     *
     * @return \Xnhd\Core\Pb\Sdo\FeedStatus[]
     */
    public function getFeedSelf()
    {
        return $this->get(self::FEEDSELF);
    }

    /**
     * Returns true if 'feedSelf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFeedSelf()
    {
        return count($this->get(self::FEEDSELF)) !== 0;
    }

    /**
     * Returns 'feedSelf' iterator
     *
     * @return \ArrayIterator
     */
    public function getFeedSelfIterator()
    {
        return new \ArrayIterator($this->get(self::FEEDSELF));
    }

    /**
     * Returns element from 'feedSelf' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\FeedStatus
     */
    public function getFeedSelfAt($offset)
    {
        return $this->get(self::FEEDSELF, $offset);
    }

    /**
     * Returns count of 'feedSelf' list
     *
     * @return int
     */
    public function getFeedSelfCount()
    {
        return $this->count(self::FEEDSELF);
    }

    /**
     * Appends value to 'consumeInFeedByLover' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ConsumeInFeed $value Value to append
     *
     * @return null
     */
    public function appendConsumeInFeedByLover(\Xnhd\Core\Pb\Sdo\ConsumeInFeed $value)
    {
        return $this->append(self::CONSUMEINFEEDBYLOVER, $value);
    }

    /**
     * Clears 'consumeInFeedByLover' list
     *
     * @return null
     */
    public function clearConsumeInFeedByLover()
    {
        return $this->clear(self::CONSUMEINFEEDBYLOVER);
    }

    /**
     * Returns 'consumeInFeedByLover' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ConsumeInFeed[]
     */
    public function getConsumeInFeedByLover()
    {
        return $this->get(self::CONSUMEINFEEDBYLOVER);
    }

    /**
     * Returns true if 'consumeInFeedByLover' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConsumeInFeedByLover()
    {
        return count($this->get(self::CONSUMEINFEEDBYLOVER)) !== 0;
    }

    /**
     * Returns 'consumeInFeedByLover' iterator
     *
     * @return \ArrayIterator
     */
    public function getConsumeInFeedByLoverIterator()
    {
        return new \ArrayIterator($this->get(self::CONSUMEINFEEDBYLOVER));
    }

    /**
     * Returns element from 'consumeInFeedByLover' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ConsumeInFeed
     */
    public function getConsumeInFeedByLoverAt($offset)
    {
        return $this->get(self::CONSUMEINFEEDBYLOVER, $offset);
    }

    /**
     * Returns count of 'consumeInFeedByLover' list
     *
     * @return int
     */
    public function getConsumeInFeedByLoverCount()
    {
        return $this->count(self::CONSUMEINFEEDBYLOVER);
    }

    /**
     * Appends value to 'feedLover' list
     *
     * @param \Xnhd\Core\Pb\Sdo\FeedStatus $value Value to append
     *
     * @return null
     */
    public function appendFeedLover(\Xnhd\Core\Pb\Sdo\FeedStatus $value)
    {
        return $this->append(self::FEEDLOVER, $value);
    }

    /**
     * Clears 'feedLover' list
     *
     * @return null
     */
    public function clearFeedLover()
    {
        return $this->clear(self::FEEDLOVER);
    }

    /**
     * Returns 'feedLover' list
     *
     * @return \Xnhd\Core\Pb\Sdo\FeedStatus[]
     */
    public function getFeedLover()
    {
        return $this->get(self::FEEDLOVER);
    }

    /**
     * Returns true if 'feedLover' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFeedLover()
    {
        return count($this->get(self::FEEDLOVER)) !== 0;
    }

    /**
     * Returns 'feedLover' iterator
     *
     * @return \ArrayIterator
     */
    public function getFeedLoverIterator()
    {
        return new \ArrayIterator($this->get(self::FEEDLOVER));
    }

    /**
     * Returns element from 'feedLover' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\FeedStatus
     */
    public function getFeedLoverAt($offset)
    {
        return $this->get(self::FEEDLOVER, $offset);
    }

    /**
     * Returns count of 'feedLover' list
     *
     * @return int
     */
    public function getFeedLoverCount()
    {
        return $this->count(self::FEEDLOVER);
    }

    /**
     * Appends value to 'consumeInFeedLover' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ConsumeInFeed $value Value to append
     *
     * @return null
     */
    public function appendConsumeInFeedLover(\Xnhd\Core\Pb\Sdo\ConsumeInFeed $value)
    {
        return $this->append(self::CONSUMEINFEEDLOVER, $value);
    }

    /**
     * Clears 'consumeInFeedLover' list
     *
     * @return null
     */
    public function clearConsumeInFeedLover()
    {
        return $this->clear(self::CONSUMEINFEEDLOVER);
    }

    /**
     * Returns 'consumeInFeedLover' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ConsumeInFeed[]
     */
    public function getConsumeInFeedLover()
    {
        return $this->get(self::CONSUMEINFEEDLOVER);
    }

    /**
     * Returns true if 'consumeInFeedLover' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConsumeInFeedLover()
    {
        return count($this->get(self::CONSUMEINFEEDLOVER)) !== 0;
    }

    /**
     * Returns 'consumeInFeedLover' iterator
     *
     * @return \ArrayIterator
     */
    public function getConsumeInFeedLoverIterator()
    {
        return new \ArrayIterator($this->get(self::CONSUMEINFEEDLOVER));
    }

    /**
     * Returns element from 'consumeInFeedLover' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ConsumeInFeed
     */
    public function getConsumeInFeedLoverAt($offset)
    {
        return $this->get(self::CONSUMEINFEEDLOVER, $offset);
    }

    /**
     * Returns count of 'consumeInFeedLover' list
     *
     * @return int
     */
    public function getConsumeInFeedLoverCount()
    {
        return $this->count(self::CONSUMEINFEEDLOVER);
    }
}
}