<?php
if (!function_exists('getSQL')) {
    /**
     * @param $builder
     *
     * @return null|string raw SQL query
     */
    function getSQL($builder)
    {
        $sql = $builder->toSql();
        foreach ($builder->getBindings() as $binding) {
            $value = is_numeric($binding) ? $binding : "'" . $binding . "'";
            $sql   = preg_replace('/\?/', $value, $sql, 1);
        }
        return $sql;
    }
}
if (!function_exists('prep_ssl_url')) {
    /**
     * Prep URL
     *
     * Simply adds the https:// part if no scheme is included
     *
     * @param   string  the URL
     *
     * @return  string
     */
    function prep_ssl_url($str = '')
    {
        if ($str === 'https://' OR $str === '') {
            return '';
        }
        $url = parse_url($str);
        if (!$url OR !isset($url['scheme'])) {
            return 'https://' . $str;
        }
        return $str;
    }
}

if (!function_exists('prep_url')) {
    /**
     * Prep URL
     *
     * Simply adds the http:// part if no scheme is included
     *
     * @param   string  the URL
     *
     * @return  string
     */
    function prep_url($str = '')
    {
        if ($str === 'http://' OR $str === '' OR $str === 'https://') {
            return '';
        }
        $url = parse_url($str);
        if (!$url OR !isset($url['scheme'])) {
            return 'http://' . $str;
        }
        return $str;
    }
}
