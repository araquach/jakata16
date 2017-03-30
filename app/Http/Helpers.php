<?php


/**
 * Display the offers in the special offers
 *
 * @param  OfferFormRequest  $request
 * @return 
 */

function getOffer($level, $gender)
{
    switch([$level, $gender]) {
        case ['G', 'F']:
            return '<span class="big">&pound;50<br></span>Colour &amp; Cut package';
            break;
        case ['S', 'F']:
            return '<span class="big">&pound;60<br></span>Colour &amp; Cut package';
            break;
        case ['SS', 'F']:
            return '<span class="big">&pound;70<br></span>Colour &amp; Cut package';
            break;
        case ['G', 'M']:
            return '<span class="big">&pound;10<br></span>Men\'s Cut &amp; Style';
            break;
        case ['S', 'M']:
            return '<span class="big">&pound;15<br></span>Men\'s Cut &amp; Style';
            break;
        case ['SS', 'M']:
            return '<span class="big">&pound;20<br></span>Men\'s Cut &amp; Style';
            break;
        default:
            return '<span class="big">&pound;30% off</span>';
    }
}

function getOffer2($level, $gender)
{
    switch([$level, $gender]) {
        case ['G', 'F']:
            return '<span class="big">&pound;50<br></span>Colour &amp; Cut package<br><em>PLUS:</em><br>2 FREE products<br><em>or</em><br><span class="big">&pound25</span><br>Cut &amp; Style<br><em>PLUS:</em><br>a Free product';
            break;
        case ['S', 'F']:
            return '<span class="big">&pound;60<br></span>Colour &amp; Cut package<br><em>PLUS:</em><br>2 FREE products<br><em>or</em><br><span class="big">&pound30</span><br>Cut &amp; Style<br><em>PLUS:</em><br>a Free product';
            break;
        case ['SS', 'F']:
            return '<span class="big">&pound;70<br></span>Colour &amp; Cut package<br><em>PLUS:</em><br>2 FREE products<br><em>or</em><br><span class="big">&pound35</span><br>Cut &amp; Style<br><em>PLUS:</em><br>a Free product';
            break;
        case ['G', 'M']:
            return '<span class="big">&pound;10<br></span>Men\'s Cut &amp; Style<br><em>PLUS:</em><br>a FREE product';
            break;
        case ['S', 'M']:
            return '<span class="big">&pound;15<br></span>Men\'s Cut &amp; Style<br><em>PLUS:</em><br>a FREE product';
            break;
        case ['SS', 'M']:
            return '<span class="big">&pound;20<br></span>Men\'s Cut &amp; Style<br><em>PLUS:</em><br>a FREE product';
            break;
        default:
            return '<span class="big">&pound;30% off</span><br> your next appointment<br><em>PLUS:</em><br>a FREE product with each service you have';
    }
}

/**
 * Display the contact status in recruitment
 *
 * @param
 * @return
 */
 
function getContactStatus($value)
{
    switch($value) {
        case 1:
            return "Not Contacted";
            break;
        case 2:
            return "Left Message";
            break;
        case 3:
            return "Spoke Direct";
            break;
        case 4:
            return "Interviewed - good";
            break;
        case 5:
            return "Interviewed - bad";
            break;
        default:
            return "Needs Sorting";
    }
}
    
/**
 * Display the quality of candidate in recruitment
 *
 * @param
 * @return
 */
    
function getQuality($value)
{
    switch($value) {
        case 1:
            return "We need them!";
            break;
        case 2:
            return "Has Potential";
            break;
        case 3:
            return "Put on backburner";
            break;
        case 4:
            return "Discard";
            break;
        default:
            return "Not Rated";
    }
}

function getStylists($cut, $colour, $gender)
{
        if($gender == 'F')
        {
            if($colour == 0)
            {
                $colour = $cut;
            }
            
            $total = ($cut + $colour) / 2;
        
            if($total < 3)
            {
                return "Layla Relf";
            }
            
            if($total >= 3 && $total < 4)
            {
                return "Laura Minett &amp; Matt Lane";
            }
            
            if($total >= 4 && $total < 5)
            {
                return "Caleb Barrie &amp; Vikki Rowland";
            }
            
            if($total >= 5  && $total < 6)
            {
                return "Natalie Doxey &amp; Laura Hall";
            }
            
            if($total >= 6)
            {
                return "Jimmy Sharpe";
            }
            
            else
            {
                return "Caleb Barrie";
            }
        }
        
        elseif($gender == 'M')
        {
            
            if($cut < 3)
            {
                return "Layla Relf";
            }
            
            if($cut >= 3 && $cut < 4)
            {
                return "Laura Minett &amp; Matt Lane";
            }
            
            if($cut >= 4 && $cut < 5)
            {
                return "Caleb Barrie &amp; Vikki Rowland";
            }
            
            if($cut >= 5 && $cut < 6)
            {
                return "Natalie Doxey &amp; Laura Hall";
            }
            
            if($cut >= 6)
            {
                return "Jimmy Sharpe";
            }
            
            else
            {
                return "Caleb Barrie";
            }
        }
}

function getTreatment($texture, $condition)
{
    switch([$texture, $condition]) {
        case ['fine', 'dry']:
            return "Moisture";
            break;
        case ['fine', 'normal']:
            return "Volumising";
            break;
        case ['fine', 'oily']:
            return "Deep Cleansing";
            break;
        case ['fine', 'overprocessed']:
            return "Repair Rescue";
            break;
        case ['normal', 'dry']:
            return "Moisture";
            break;
        case ['normal', 'normal']:
            return "Relaxing";
            break;
        case ['normal', 'oily']:
            return "Deep cleansing";
            break;
        case ['normal', 'overprocessed']:
            return "Fibre Force";
            break;
        case ['coarse', 'dry']:
            return "Intense Moisture";
            break;
        case ['coarse', 'normal']:
            return "Smoothing";
            break;
        case ['coarse', 'oily']:
            return "Deep cleansing";
            break;
        case ['coarse', 'overprocessed']:
            return "Fibre Force";
            break;
        default:
            return "";
    }
}