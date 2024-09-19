<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LoverEventType enum
 */
final class LoverEventType
{
    const enmLoverEvent_None = 0;
    const enmLoverEvent_AddLover = 1;
    const enmLoverEvent_IncreaseLoverValue = 2;
    const enmLoverEvent_LoverLevelChange = 3;
    const enmLoverEvent_WearKeepsake = 4;
    const enmLoverEvent_WatchWedding = 5;
    const enmLoverEvent_HoldWedding = 6;
    const enmLoverEvent_BreakUp = 7;
    const enmLoverEvent_Divorce = 8;
    const enmLoverEvent_ChooseSEID = 9;
    const enmLoverEvent_Confess = 10;
    const enmLoverEvent_AnswerConfess = 11;
    const enmLoverEvent_LoverDacne = 12;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmLoverEvent_None' => self::enmLoverEvent_None,
            'enmLoverEvent_AddLover' => self::enmLoverEvent_AddLover,
            'enmLoverEvent_IncreaseLoverValue' => self::enmLoverEvent_IncreaseLoverValue,
            'enmLoverEvent_LoverLevelChange' => self::enmLoverEvent_LoverLevelChange,
            'enmLoverEvent_WearKeepsake' => self::enmLoverEvent_WearKeepsake,
            'enmLoverEvent_WatchWedding' => self::enmLoverEvent_WatchWedding,
            'enmLoverEvent_HoldWedding' => self::enmLoverEvent_HoldWedding,
            'enmLoverEvent_BreakUp' => self::enmLoverEvent_BreakUp,
            'enmLoverEvent_Divorce' => self::enmLoverEvent_Divorce,
            'enmLoverEvent_ChooseSEID' => self::enmLoverEvent_ChooseSEID,
            'enmLoverEvent_Confess' => self::enmLoverEvent_Confess,
            'enmLoverEvent_AnswerConfess' => self::enmLoverEvent_AnswerConfess,
            'enmLoverEvent_LoverDacne' => self::enmLoverEvent_LoverDacne,
        );
    }
}
}