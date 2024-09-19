<?php
/**
 * Auto generated from define_2.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TaskType enum
 */
final class TaskType
{
    const enmTaskType_Common = 0;
    const enmTaskType_Grow = 1;
    const enmTaskType_MusicWork = 2;
    const enmTaskType_House = 3;
    const enmTaskType_Guild = 4;
    const enmTaskType_Tour = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmTaskType_Common' => self::enmTaskType_Common,
            'enmTaskType_Grow' => self::enmTaskType_Grow,
            'enmTaskType_MusicWork' => self::enmTaskType_MusicWork,
            'enmTaskType_House' => self::enmTaskType_House,
            'enmTaskType_Guild' => self::enmTaskType_Guild,
            'enmTaskType_Tour' => self::enmTaskType_Tour,
        );
    }
}
}