<?php

    include 'set-config.php';
    function anti_injection($data)
    {
        global $connect;
        $filter = mysqli_escape_string($connect,stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
        return $filter;
    }

    function query($query)
    {
        global $connect;
        $result = mysqli_query($connect, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function rp($value)
    {
        $rp = "Rp." . number_format($value,2,',','.');
        return $rp;
    }
?>