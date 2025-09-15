<?php
    // Diego Haro
    

    function ReturnStatus($rDate, $dDate)
    {   
        // Convert date strings to timestamps for comparison
        $rTime = strtotime($rDate);
        $dTime = strtotime($dDate);
        //Create DateTime object for both return and due dates
        $rDateCreate = date_create($rDate);
        $rDateCreateFormat = date_format($rDateCreate, 'Y-m-d');
        $dDateCreate = date_create($dDate);
        $dDateCreateFormat = date_format($dDateCreate, 'Y-m-d');

        //calculate the difference between the two Dates
        $compareDates = date_diff($rDateCreate, $dDateCreate);

        //Get the properties from the $compareDates objects
        $days = $compareDates -> d;
        $month = $compareDates -> m;
        $year = $compareDates -> y;
         //Create formatted string showing the time difference
        $DateFormat = "Years: ${year} Months: ${month} Days: $days";
        
        //Checks if book is overdue
        if ($rTime > $dTime)
        {
            return "The Book is overdue by ${DateFormat}";
        }
        //Checks if book is not due yet
        elseif ($rTime < $dTime) {
            return "The Book won't be due till ${DateFormat}";
        }
        //Checks if book is due today
        elseif ($rTime == $dTime)
        {
            return "The book is due today";
        }
        //Just incase
        else{
        
            return "Please enter a return and due date";
        }


     
    } 
    
    

?>
