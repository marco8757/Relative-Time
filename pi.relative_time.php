<?php


$plugin_info = array(
    'pi_name'           => 'Relative Time',
    'pi_version'        => '1.0',
    'pi_author'         => 'Lim Choon Yun (Marco)',
    'pi_author_url'     => 'https://github.com/marco8757',
    'pi_description'    => 'Parse relative date of ExpressionEngine to multilingual.',
    // 'pi_usage'          => RelativeTime::usage()
);


class Relative_time
{
    public $return_data = "";
    public $addon_path;
    
    public $lang_ms = array(
        'singular' => 'satu',
        'one' => 'satu',
        'less_than' => 'kurang daripada',
        'about' => 'kira kira',
        'future' => 'dalam',
        'ago' => 'yang lalu',
        'year' => 'tahun',
        'years' => 'tahun',
        'month' => 'bulan',
        'months' => 'bulan',
        'fortnight' => 'dua minggu',
        'fortnights' => 'dua minggu',
        'week' => 'minggu',
        'weeks' => 'minggu',
        'day' => 'hari',
        'days' => 'hari',
        'hour' => 'jam',
        'hours' => 'jam',
        'minute' => 'minit',
        'minutes' => 'minit',
        'second' => 'saat',
        'seconds' => 'saat',
        'Sun' => 'Ahad',
        'Mon' => 'Isn',
        'Tue' => 'Sel',
        'Wed' => 'Rabu',
        'Thu' => 'Kha',
        'Fri' => 'Jum',
        'Sat' => 'Sab',
        'Su' => 'A',
        'Mo' => 'I',
        'Tu' => 'S',
        'We' => 'R',
        'Th' => 'K',
        'Fr' => 'J',
        'Sa' => 'S',
        'Sunday' => 'Ahad',
        'Monday' => 'Isnin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Khamis',
        'Friday' => 'Jumaat',
        'Saturday' => 'Sabtu',
        'Jan' => 'Jan',
        'Feb' => 'Feb',
        'Mar' => 'Mac',
        'Apr' => 'Apr',
        'May' => 'Mei',
        'Jun' => 'Jun',
        'Jul' => 'Jul',
        'Aug' => 'Ogos',
        'Sep' => 'Sep',
        'Oct' => 'Okt',
        'Nov' => 'Nov',
        'Dec' => 'Dis',
        'January' => 'Januari',
        'February' => 'Februari',
        'March' => 'Mac',
        'April' => 'April',
        'May_l' => 'Mei',
        'June' => 'Jun',
        'July' => 'Julai',
        'August' => 'Ogos',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Disember',
        // IGNORE
        ''=>''
    );

    public $lang_en = array(
        'singular' => 'one',
        'one' => 'one',
        'less_than' => 'less than',
        'about' => 'about',
        'past' => 'ago',
        'future' => 'in',
        'ago' => 'ago',
        'year' => 'year',
        'years' => 'years',
        'month' => 'month',
        'months' => 'months',
        'fortnight' => 'fortnight',
        'fortnights' => 'fortnights',
        'week' => 'week',
        'weeks' => 'weeks',
        'day' => 'day',
        'days' => 'days',
        'hour' => 'hour',
        'hours' => 'hours',
        'minute' => 'minute',
        'minutes' => 'minutes',
        'second' => 'second',
        'seconds' => 'seconds',
        'am' => 'am',
        'pm' => 'pm',
        'AM' => 'AM',
        'PM' => 'PM',
        'Sun' => 'Sun',
        'Mon' => 'Mon',
        'Tue' => 'Tue',
        'Wed' => 'Wed',
        'Thu' => 'Thu',
        'Fri' => 'Fri',
        'Sat' => 'Sat',
        'Su' => 'S',
        'Mo' => 'M',
        'Tu' => 'T',
        'We' => 'W',
        'Th' => 'T',
        'Fr' => 'F',
        'Sa' => 'S',
        'Sunday' => 'Sunday',
        'Monday' => 'Monday',
        'Tuesday' => 'Tuesday',
        'Wednesday' => 'Wednesday',
        'Thursday' => 'Thursday',
        'Friday' => 'Friday',
        'Saturday' => 'Saturday',
        'Jan' => 'Jan',
        'Feb' => 'Feb',
        'Mar' => 'Mar',
        'Apr' => 'Apr',
        'May' => 'May',
        'Jun' => 'Jun',
        'Jul' => 'Jul',
        'Aug' => 'Aug',
        'Sep' => 'Sep',
        'Oct' => 'Oct',
        'Nov' => 'Nov',
        'Dec' => 'Dec',
        'January' => 'January',
        'February' => 'February',
        'March' => 'March',
        'April' => 'April',
        'May_l' => 'May',
        'June' => 'June',
        'July' => 'July',
        'August' => 'August',
        'September' => 'September',
        'October' => 'October',
        'November' => 'November',
        'December' => 'December',
        // IGNORE
        ''=>''
    );

    public $lang_zh = array(
        'singular' => '一',
        'one' => '一',
        'less_than' => '少於',
        'about' => '大約',
        'future' => '后',
        'ago' => '前',
        'year' => '年',
        'years' => '年',
        'month' => '月',
        'months' => '月',
        'fortnight' => '两个星期',
        'fortnights' => '两个星期',
        'week' => '星期',
        'weeks' => '星期',
        'day' => '天',
        'days' => '天',
        'hour' => '小时',
        'hours' => '小时',
        'minute' => '分钟',
        'minutes' => '分钟',
        'second' => '秒',
        'seconds' => '秒',
        'Sun' => '日',
        'Mon' => '一',
        'Tue' => '二',
        'Wed' => '三',
        'Thu' => '四',
        'Fri' => '五',
        'Sat' => '六',
        'Su' => '日',
        'Mo' => '一',
        'Tu' => '二',
        'We' => '三',
        'Th' => '四',
        'Fr' => '五',
        'Sa' => '六',
        'Sunday' => '星期日',
        'Monday' => '星期一',
        'Tuesday' => '星期二',
        'Wednesday' => '星期三',
        'Thursday' => '星期四',
        'Friday' => '星期五',
        'Saturday' => '星期六',
        'Jan' => '一月',
        'Feb' => '二月',
        'Mar' => '三月',
        'Apr' => '四月',
        'May' => '五月',
        'Jun' => '六月',
        'Jul' => '七月',
        'Aug' => '八月',
        'Sep' => '九月',
        'Oct' => '十月',
        'Nov' => '十一月',
        'Dec' => '十二月',
        'January' => '一月',
        'February' => '二月',
        'March' => '三月',
        'April' => '四月',
        'May_l' => '五月',
        'June' => '六月',
        'July' => '七月',
        'August' => '八月',
        'September' => '九月',
        'October' => '十月',
        'November' => '十一月',
        'December' => '十二月',
        // IGNORE
        ''=>''
    );


    public function __construct()
    {

        $string = ee()->TMPL->tagdata;
        $language = ee()->TMPL->fetch_param('language');

        $string_array = explode(' ', $string);

        switch (ee()->TMPL->fetch_param('language')) {
            case "ms":
                $string_replace = $this->lang_ms;
                $strip_spaces = false;
                break;
            case "zh":
                $string_replace = $this->lang_zh;
                $strip_spaces = true;
                break;
            default:
                $string_replace = $this->lang_en;
                $strip_spaces = false;
        }
    

        
        foreach ($string_array as $i => $search) {
            $search = trim($search);
            $replacement = isset($string_replace[$search]) ?
                $string_replace[$search] :
                $search;
            $string = str_replace($search, $replacement,$string);

            if ($strip_spaces) {
                $string = str_replace(' ', '',$string);                
            }
        }
        $this->return_data = $string;
    }

}