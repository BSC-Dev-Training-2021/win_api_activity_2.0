<?php
$minDate = date("Y-m-d");
$stop_date = date('Y-m-d', strtotime($minDate . ' -9 day'));

if (isset($_POST['submit_btn'])) {

    if ($_POST['startDate'] <= $_POST['endDate']) {
        $dateStrt = date_create($_POST['startDate']);
        $dateEnd = date_create($_POST['endDate']);
        $startDate = date_format($dateStrt, "Y-m-d ");
        $endDate = date_format($dateEnd, "Y-m-d ");
        //echo $startDate . ", " . $endDate;
        header("location:view.php?start=$startDate&end=$endDate");
    }else{
        echo "date not valid";
    }
}
