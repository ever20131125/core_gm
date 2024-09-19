<?php

namespace Xnhd\Core\Socket;

class CCodeEngine
{
    public static function encode_int8(&$pOut,  $Src)
    {
        !is_array($pOut) ? $pOut = $array() : NULL;

        $pOut[] = pack("c", $Src);

        return 1;
    }
    public static function decode_int8(&$pIn,  &$pOut)
    {
        $pOut = unpack('C', $pIn);
        $pOut = $pOut[1];
        0xff == $pOut ? $pOut = -1 : NULL;
        $pIn = substr($pIn, 1);
        return 1;
    }

    public static function encode_int16(&$pOut,  $Src)
    {
        !is_array($pOut) ? $pOut = $array() : NULL;

        $pOut[] = pack("n", $Src);

        return 2;
    }
    public static function decode_int16(&$pIn,  &$pOut)
    {
        $pOut = unpack('n', $pIn);
        $pOut = $pOut[1];
        0xffff == $pOut ? $pOut = -1 : NULL;
        $pIn = substr($pIn, 2);
        return 2;
    }

    public static function encode_int32(&$pOut,  $Src)
    {
        !is_array($pOut) ? $pOut = $array() : NULL;

        $pOut[] = pack("N", $Src);

        return 4;
    }
    //小头在前，专门为ip地址
    public static function encode_int32_little(&$pOut, $Src)
    {
        !is_array($pOut) ? $pOut = $array() : NULL;

        $pOut[] = pack("V", $Src);

        return 4;
    }
    public static function decode_int32(&$pIn,  &$pOut)
    {
        $pOut = unpack('N', $pIn);
        $pOut = $pOut[1];

        if( PHP_INT_SIZE==8 AND $pOut>0x7FFFFFFF ) {
            // PHP_INT_SIZE==8 表示php整形占用8字节; $pOut>0x7FFFFFFF: 表示32bit的负数
            // 当64bit的平台上, 整数字长为8字节, 通过unpack拆解出来的32bit的负数是64bit的合法正整数
            // 因此对于32bit的负数依然要表示成64bit下的负数
            $pOut |= 0XFFFFFFFF00000000;
        }
        $pIn = substr($pIn, 4);
        return 4;
    }

    /*
     * @method:    encode_string 编码string. 注意: 把'\0'也进行了编码,字符串长度包含'\0'
     * @fullname:  CCodeEngine::encode_string
     * @access:    public
     * @param: char * * pOut
     * @param: const char * pSrc
     * @param: const int16_t nMaxStringLength 最大字符串长度.pSrc的最大长度
     * @return:   Game51::int32_t
     * @qualifier:
     * @note
     * @par 示例:
     * @code

     * @endcode

     * @see
     * @deprecated
     */
    public static function encode_string(&$pOut,  $Src, $nMaxStringLength)
    {
        if (0 >= $nMaxStringLength)
        {
            return false;
        }

        !is_array($pOut) ? $pOut = $array() : NULL;

        $tmp_string_length = strlen($Src);
        if ($tmp_string_length != 0)
        {
            $tmp_string_length += 1;
        }

        if ($tmp_string_length  > $nMaxStringLength)
        {
            $tmp_string_length = $nMaxStringLength;
        }

        //首先编入字符串的长度
        $coded_length = CCodeEngine::encode_int16($pOut, $tmp_string_length);

        if ($tmp_string_length == 0) //空串
        {
            return $coded_length;
        }

        $format = "a" . $tmp_string_length;
        $str = substr($Src, 0, $tmp_string_length -1);

        $pOut[] = pack($format, $str);

        return ($coded_length + $tmp_string_length);

    }

    /*
     * @method:    decode_string 解码string
     * @fullname:  CCodeEngine::decode_string
     * @access:    public
     * @param: char * * pIn
     * @param: char * pOut
     * @param: const int16_t nMaxStringLength pOut的最大长度
     * @return:   Game51::int32_t
     * @qualifier:
     * @note
     * @par 示例:
     * @code

     * @endcode

     * @see
     * @deprecated
     */
    public static function decode_string(&$pIn,  &$pOut, $nMaxStringLength)
    {
        if (NULL == $pIn || 0 >= $nMaxStringLength)
        {
            return 0;
        }

        $string_length = 0;

        $tmp_length = CCodeEngine::decode_int16($pIn, $string_length);
        //  if (0 == $tmp_length)
        //  {
        //      return 0;
        //  }

        if ($string_length == 0)
        {
            $pOut = '\0';
            return $tmp_length;
        }

        $real_length = $string_length;
        if ( $string_length > $nMaxStringLength)
        {
            $real_length = $nMaxStringLength;
        }
        $format = "a".$real_length;
        $pOut = unpack($format, substr($pIn, 0, $real_length));
        $pOut = $pOut[1];

        $pIn = substr($pIn, $string_length);

        return($string_length + $tmp_length);
    }

    public static function encode_memory(&$pOut, $Src, $iMemorySize)
    {
        if (0 >= $iMemorySize)
        {
            return false;
        }

        !is_array($pOut) ? $pOut = $array() : NULL;

        $tmp_string_length = strlen($Src);

        if ($tmp_string_length  > $iMemorySize)
        {
            $tmp_string_length = $iMemorySize;
        }

        if ($tmp_string_length == 0) //空串
        {
            return 0;
        }

        $format = "a" . $tmp_string_length;
        $str = substr($Src, 0, $tmp_string_length);

        $pOut[] = pack($format, $str);

        return $tmp_string_length;
    }

    public static function decode_memory(&$pIn,  &$pOut, $iMemorySize)
    {
        if (NULL == $pIn || 0 >= $iMemorySize)
        {
            return 0;
        }

        if ($iMemorySize == 0)
        {
            $pOut = '';
            return 0;
        }

        $format = "a".$iMemorySize;
        $pOut = unpack($format, substr($pIn, 0, $iMemorySize));
        $pOut = $pOut[1];

        $pIn = substr($pIn, $iMemorySize);

        return $iMemorySize;
    }

    public static function encode_int64(&$pOut,  $Src)
    {
        !is_array($pOut) ? $pOut = $array() : NULL;

        $high = $Src < 0 ? 0xffffffff : 0;
        $low = $Src < 0 ? 0xffffffff - abs($Src) + 1 : $Src;
        //echo $low;
        CCodeEngine::encode_int32($pOut, $high);
        CCodeEngine::encode_int32($pOut, $low);
        //$pOut[] = pack("q", $Src);

        return 8;
    }
    public static function encode_int64_new(&$pOut, $Src)
    {
        !is_array($pOut) ? $pOut = array() : NULL;
        if ( PHP_INT_SIZE>=8 )
        {
            $i = (int)$Src;
            $pOut[] = pack ( "NN", $i>>32, $i&((1<<32)-1) );
            return 8;
        }

        // x32 route, bcmath
        $x = "4294967296";
        if ( function_exists("bcmul") )
        {
            $h = bcdiv ( $Src, $x, 0 );
            $l = bcmod ( $Src, $x );
            $pOut[] = pack ( "NN", (float)$h, (float)$l ); // conversion to float is intentional; int would lose 31st bit
            return 8;
        }

        // x32 route, 15 or less decimal digits
        // we can use float, because its actually double and has 52 precision bits
        if ( strlen($Src)<=15 )
        {
            $f = (float)$Src;
            $h = (int)($f/$x);
            $l = (int)($f-$x*$h);
            $pOut = pack ( "NN", $h, $l );
            return 8;
        }

    }
    public static function decode_int64(&$pIn,  &$pOut)
    {
        CCodeEngine::decode_int32($pIn, $high);
        CCodeEngine::decode_int32($pIn, $low);

        $pOut = $low;

        return 8;
    }
    public static function decode_int64_new(&$pIn, &$pOut)
    {
        list($h,$l) = array_values ( unpack ( "N*N*", $pIn ) );

        // x64 route
        if ( PHP_INT_SIZE>=8 )
        {
            if ( $h<0 ) $h += (1<<32); // because php 5.2.2 to 5.2.5 is totally fucked up again
            if ( $l<0 ) $l += (1<<32);
            $pOut = ($h<<32) + $l;
            $pIn = substr($pIn, 8);
            return 8;
        }

        // x32 route
        $h = sprintf ( "%u", $h );
        $l = sprintf ( "%u", $l );
        $x = "4294967296";

        // bcmath
        if ( function_exists("bcmul") )
        {
            $pOut = bcadd ( $l, bcmul ( $x, $h ) );
            $pIn = substr($pIn, 8);
            return 8;
        }

        // no bcmath, 15 or less decimal digits
        // we can use float, because its actually double and has 52 precision bits
        if ( $h<1048576 )
        {
            $f = ((float)$h)*$x + (float)$l;
            $pOut = sprintf ( "%.0f", $f ); // builtin conversion is only about 39-40 bits precise!
            $pIn = substr($pIn, 8);
            return 8;
        }
    }
}
