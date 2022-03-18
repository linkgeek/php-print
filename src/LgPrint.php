<?php

namespace lgPrint;

/**
 * 格式化类
 * @author LinkGeek
 */
class LgPrint
{
    /**
     * 多变量打印
     */
    public static function p()
    {
        $args = func_get_args();
        foreach ($args as $arg) {
            echo "<pre>";
            print_r($arg);
        }
        exit;
    }

    /**
     * API 输出格式
     * @param $status
     * @param string $message
     * @param array $data
     * @return false|string
     */
    public static function show($status, $message = '', $data = [])
    {
        $result = [
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ];

        return json_encode($result);
    }

    /**
     * 格式化字节
     * @param int $num 数字
     * @param int $precision 精准度
     * @return string
     */
    public static function byte_format($num = 0, $precision = 1)
    {
        if ($num >= 1000000000000) {
            $num = round($num / 1099511627776, $precision);
            $unit = 'TB';
        } elseif ($num >= 1000000000) {
            $num = round($num / 1073741824, $precision);
            $unit = 'GB';
        } elseif ($num >= 1000000) {
            $num = round($num / 1048576, $precision);
            $unit = 'MB';
        } elseif ($num >= 1000) {
            $num = round($num / 1024, $precision);
            $unit = 'KB';
        } else {
            return number_format($num) . ' Bytes';
        }

        return number_format($num, $precision) . ' ' . $unit;
    }
}