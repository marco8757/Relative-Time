<?php


$plugin_info = array(
    'pi_name'           => 'Relative Time',
    'pi_version'        => '1.0',
    'pi_author'         => 'Marco',
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


    public function __construct()
    {
        // $this->addon_path = PATH_THIRD . 'relative_time';
        // include_once($this->addon_path . '/lang_ms.php');
        // ee()->lang->loadfile('lang_ms');


        $string = ee()->TMPL->tagdata;
        $language = ee()->TMPL->fetch_param('language');

        $string_array = explode(' ', $string);

        switch (ee()->TMPL->fetch_param('language')) {
            case "ms":
                $string_replace = $this->lang_ms;
                break;
            // case "zh":
            //     $string_replace = $this->lang_zh;
            //     break;
            default:
                $string_replace = $this->lang_en;
        }
    

        
        foreach ($string_array as $i => $search) {
            $search = trim($search);
            $replacement = isset($string_replace[$search]) ?
                $string_replace[$search] :
                $search;
            $string = str_replace($search, $replacement,$string);
        }
        $this->return_data = $string;
    }

}