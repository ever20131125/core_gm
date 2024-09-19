<?php
/**
 * Auto generated from define.proto at 2022-08-17 12:02:11
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ScriptType enum
 */
final class ScriptType
{
    const enmScriptType_Common = 0;
    const enmScriptType_ItemTriger = 1;
    const enmScriptType_Buffer = 2;
    const enmScriptType_Attribute = 3;
    const enmScriptType_DayUse = 4;
    const enmScriptType_Backup1 = 5;
    const enmScriptType_Backup2 = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'enmScriptType_Common' => self::enmScriptType_Common,
            'enmScriptType_ItemTriger' => self::enmScriptType_ItemTriger,
            'enmScriptType_Buffer' => self::enmScriptType_Buffer,
            'enmScriptType_Attribute' => self::enmScriptType_Attribute,
            'enmScriptType_DayUse' => self::enmScriptType_DayUse,
            'enmScriptType_Backup1' => self::enmScriptType_Backup1,
            'enmScriptType_Backup2' => self::enmScriptType_Backup2,
        );
    }
}
}