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