<?php
    $persnol_name = $_POST['personalName'];

    $uP_case = strtoupper($persnol_name);

    $f_c = substr($uP_case, 0, 1);
    $s_c = substr($uP_case, 0, 2);
    $t_c = substr($uP_case, 0, 3);
    $fo_c = substr($uP_case, 0, 4);

    if($f_c == 'A' || $f_c == 'L' || $f_c == 'E' || $f_c == 'I'|| $f_c == 'O' )
    {
        // echo "Aries";
        header("Location:today_horoscope.php?horoscope=aries");
    }
    else if($f_c == 'B' || $f_c == 'V' || $f_c == 'U' || $f_c == 'W' )
    {
        if($f_c == 'B' && $s_c == 'BH')
        {
            // echo "Sagittarius";
            header("Location:today_horoscope.php?horoscope=sagittarius");
        }
        else if($f_c == 'B' && $s_c != 'BH')
        {
            // echo "Taurus";
            header("Location:today_horoscope.php?horoscope=taurus");
        }
        else 
        {
            // echo "Taurus";
            header("Location:today_horoscope.php?horoscope=taurus");
        }
    }
    else if($f_c == 'K' || $t_c == 'CHH' || $s_c == 'GH' || $f_c == 'Q' || $f_c == 'C' || $f_c == 'G')
    {
        if($f_c == "K" && $s_c == 'KH')
        {
            // echo "Capricorn";
            header("Location:today_horoscope.php?horoscope=capricorn");
        }
        else if($f_c == 'C' && $s_c == 'CH' && $t_c == 'CHH')
        {
            // echo "Gemini";
            header("Location:today_horoscope.php?horoscope=gemini");
        }
        else if($f_c == 'C' && $s_c == 'CH' && $t_c != 'CHH')
        {
            // echo "Pisces";
            header("Location:today_horoscope.php?horoscope=pisces");
        }
        else if($f_c == 'C' && $s_c == 'CH')
        {
            // echo "Aquarius";
            header("Location:today_horoscope.php?horoscope=aquarius");
        }
        else if($f_c == 'G' && $s_c == 'GH')
        {
            // echo "Gemini";
            header("Location:today_horoscope.php?horoscope=gemini");
        }
        else if($f_c == 'G' && $s_c != 'GH')
        {
            echo "Aquarius";
            header("Location:today_horoscope.php?horoscope=aquarius");
        } 
        else
        {
            echo "Gemini";
            header("Location:today_horoscope.php?horoscope=gemini");
        }
        
    }
    else if($s_c == 'DD' || $f_c == 'H' || $f_c == 'D')
    {
        if($f_c == 'D' && $s_c != 'DD' && $s_c != 'DH')
        {
            // echo 'Pisces';
            header("Location:today_horoscope.php?horoscope=pisces");
        }
        else if($f_c == 'D' && $s_c == 'DH')
        {
            // echo 'Sagittarius';
            header("Location:today_horoscope.php?horoscope=sagittarius");
        }
        else if($f_c == 'D' && $s_c == 'DD')
        {
            // echo "Cancer";
            header("Location:today_horoscope.php?horoscope=cancer");
        }
        else 
        {
            // echo "Cancer";
            header("Location:today_horoscope.php?horoscope=cancer");
        }
    }
    else if($f_c == 'M' || $s_c == 'TT' || $f_c == 'T')
    {
        if($f_c == 'T' && $s_c != 'TT' && $fo_c != 'TTHH' && $s_c != 'TH')
        {
            // echo "Libra";
            header("Location:today_horoscope.php?horoscope=libra");
        }
        else if($f_c == 'T' && $s_c == 'TT' && $fo_c != 'TTHH')
        {
            // echo "Leo";
            header("Location:today_horoscope.php?horoscope=leo");
        }
        else if($f_c == 'T' && $s_c == 'TT' && $fo_c == 'TTHH')
        {
            // echo "Vigro";
            header("Location:today_horoscope.php?horoscope=vigro");
        }
        else if($f_c == 'T' && $s_c == 'TH')
        {
            // echo "Pisces";
            header("Location:today_horoscope.php?horoscope=pisces");
        }
        else if($f_c == 'M')
        {
            // echo "Leo";
            header("Location:today_horoscope.php?horoscope=leo");
        }
        else if($f_c == 'TT')
        {
            // echo "Leo";
            header("Location:today_horoscope.php?horoscope=leo");
        }
        
    }
    else if($f_c == 'P')
    {
        // echo "Vigro";
        header("Location:today_horoscope.php?horoscope=vigro");
    }
    else if($f_c == 'R' )
    {
        // echo "Libra";
        header("Location:today_horoscope.php?horoscope=libra");
    }
    else if($f_c == 'N' || $f_c == 'Y')
    {
        // echo "Scorpius";
        header("Location:today_horoscope.php?horoscope=scorpius");
    }
    else if($f_c == 'F')
    {
        // echo "Sagittarius";
        header("Location:today_horoscope.php?horoscope=sagittarius");
    }
    else if($f_c == 'J')
    {
        // echo "Capricorn";
        header("Location:today_horoscope.php?horoscope=capricorn");
    }
    else if( $f_c == 'S' || $s_c == 'SH')
    {
        // echo "Aquarius";
        header("Location:today_horoscope.php?horoscope=aquarius");
    }
    else if( $f_c == 'Z')
    {
        // echo "Pisces";
        header("Location:today_horoscope.php?horoscope=pisces");
    }
?>