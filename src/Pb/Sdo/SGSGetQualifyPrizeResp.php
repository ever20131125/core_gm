<?php
/**
 * Auto generated from smallgameserver.proto at 2022-06-18 10:46:38
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSGetQualifyPrizeResp message
 */
class SGSGetQualifyPrizeResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const ARRRANKPRIZE = 3;
    const ARRTITLEPRIZE = 4;
    const ARRDAILYPRIZE = 5;
    const ARRCAREERPRIZE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRRANKPRIZE => array(
            'name' => 'arrRankPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyTaskPrize'
        ),
        self::ARRTITLEPRIZE => array(
            'name' => 'arrTitlePrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyTitlePrize'
        ),
        self::ARRDAILYPRIZE => array(
            'name' => 'arrDailyPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyTaskPrize'
        ),
        self::ARRCAREERPRIZE => array(
            'name' => 'arrCareerPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyTaskPrize'
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ARRRANKPRIZE] = array();
        $this->values[self::ARRTITLEPRIZE] = array();
        $this->values[self::ARRDAILYPRIZE] = array();
        $this->values[self::ARRCAREERPRIZE] = array();
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Appends value to 'arrRankPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyTaskPrize $value Value to append
     *
     * @return null
     */
    public function appendArrRankPrize(\Xnhd\Core\Pb\Sdo\QualifyTaskPrize $value)
    {
        return $this->append(self::ARRRANKPRIZE, $value);
    }

    /**
     * Clears 'arrRankPrize' list
     *
     * @return null
     */
    public function clearArrRankPrize()
    {
        return $this->clear(self::ARRRANKPRIZE);
    }

    /**
     * Returns 'arrRankPrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyTaskPrize[]
     */
    public function getArrRankPrize()
    {
        return $this->get(self::ARRRANKPRIZE);
    }

    /**
     * Returns true if 'arrRankPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRankPrize()
    {
        return count($this->get(self::ARRRANKPRIZE)) !== 0;
    }

    /**
     * Returns 'arrRankPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRankPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRRANKPRIZE));
    }

    /**
     * Returns element from 'arrRankPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyTaskPrize
     */
    public function getArrRankPrizeAt($offset)
    {
        return $this->get(self::ARRRANKPRIZE, $offset);
    }

    /**
     * Returns count of 'arrRankPrize' list
     *
     * @return int
     */
    public function getArrRankPrizeCount()
    {
        return $this->count(self::ARRRANKPRIZE);
    }

    /**
     * Appends value to 'arrTitlePrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyTitlePrize $value Value to append
     *
     * @return null
     */
    public function appendArrTitlePrize(\Xnhd\Core\Pb\Sdo\QualifyTitlePrize $value)
    {
        return $this->append(self::ARRTITLEPRIZE, $value);
    }

    /**
     * Clears 'arrTitlePrize' list
     *
     * @return null
     */
    public function clearArrTitlePrize()
    {
        return $this->clear(self::ARRTITLEPRIZE);
    }

    /**
     * Returns 'arrTitlePrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyTitlePrize[]
     */
    public function getArrTitlePrize()
    {
        return $this->get(self::ARRTITLEPRIZE);
    }

    /**
     * Returns true if 'arrTitlePrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTitlePrize()
    {
        return count($this->get(self::ARRTITLEPRIZE)) !== 0;
    }

    /**
     * Returns 'arrTitlePrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTitlePrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTITLEPRIZE));
    }

    /**
     * Returns element from 'arrTitlePrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyTitlePrize
     */
    public function getArrTitlePrizeAt($offset)
    {
        return $this->get(self::ARRTITLEPRIZE, $offset);
    }

    /**
     * Returns count of 'arrTitlePrize' list
     *
     * @return int
     */
    public function getArrTitlePrizeCount()
    {
        return $this->count(self::ARRTITLEPRIZE);
    }

    /**
     * Appends value to 'arrDailyPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyTaskPrize $value Value to append
     *
     * @return null
     */
    public function appendArrDailyPrize(\Xnhd\Core\Pb\Sdo\QualifyTaskPrize $value)
    {
        return $this->append(self::ARRDAILYPRIZE, $value);
    }

    /**
     * Clears 'arrDailyPrize' list
     *
     * @return null
     */
    public function clearArrDailyPrize()
    {
        return $this->clear(self::ARRDAILYPRIZE);
    }

    /**
     * Returns 'arrDailyPrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyTaskPrize[]
     */
    public function getArrDailyPrize()
    {
        return $this->get(self::ARRDAILYPRIZE);
    }

    /**
     * Returns true if 'arrDailyPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDailyPrize()
    {
        return count($this->get(self::ARRDAILYPRIZE)) !== 0;
    }

    /**
     * Returns 'arrDailyPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDailyPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDAILYPRIZE));
    }

    /**
     * Returns element from 'arrDailyPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyTaskPrize
     */
    public function getArrDailyPrizeAt($offset)
    {
        return $this->get(self::ARRDAILYPRIZE, $offset);
    }

    /**
     * Returns count of 'arrDailyPrize' list
     *
     * @return int
     */
    public function getArrDailyPrizeCount()
    {
        return $this->count(self::ARRDAILYPRIZE);
    }

    /**
     * Appends value to 'arrCareerPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyTaskPrize $value Value to append
     *
     * @return null
     */
    public function appendArrCareerPrize(\Xnhd\Core\Pb\Sdo\QualifyTaskPrize $value)
    {
        return $this->append(self::ARRCAREERPRIZE, $value);
    }

    /**
     * Clears 'arrCareerPrize' list
     *
     * @return null
     */
    public function clearArrCareerPrize()
    {
        return $this->clear(self::ARRCAREERPRIZE);
    }

    /**
     * Returns 'arrCareerPrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyTaskPrize[]
     */
    public function getArrCareerPrize()
    {
        return $this->get(self::ARRCAREERPRIZE);
    }

    /**
     * Returns true if 'arrCareerPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCareerPrize()
    {
        return count($this->get(self::ARRCAREERPRIZE)) !== 0;
    }

    /**
     * Returns 'arrCareerPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCareerPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCAREERPRIZE));
    }

    /**
     * Returns element from 'arrCareerPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyTaskPrize
     */
    public function getArrCareerPrizeAt($offset)
    {
        return $this->get(self::ARRCAREERPRIZE, $offset);
    }

    /**
     * Returns count of 'arrCareerPrize' list
     *
     * @return int
     */
    public function getArrCareerPrizeCount()
    {
        return $this->count(self::ARRCAREERPRIZE);
    }
}
}