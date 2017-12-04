<?php include 'includes/config.php'?>
<?php
    
//daily php code goes here    

    if(isset($_GET['day']))
    {//show slected day
        $day = $_GET['day'];
    }else{//show current day
        $day = date('l');
    }
    
?>


<?php

//retrieves day of week, Sunday
//$day = date('l');


//REMOVE LINE BELOW - TEST ONLY
//$day= 'Monday';

switch($day)
{
        case 'Sunday':
        $coffee = 'Cafe Latte';
        $pic = 'cafelatte.jpg';
        $color = '#EFAD70';
        $alt = 'Cafe Latte';
        $description = '; milk this beverage for all it\'s worth.';
    break;       
    case 'Monday':
        $coffee = 'Pumpkin Spice Latte';
        $pic = 'pumpkin-spice-latte.jpg';
        $color = '#D86D2F';
        $alt = 'Pumpkin Spice Latte';
        $description = 'which makes us wish it was always Fall, as this is one of our top sellers!';
    break;
      case 'Tuesday':
        $coffee = 'Iced Coffee';
        $pic = 'icecoffee.jpg';
        $color = 'brown';
        $alt = 'Iced Coffee';
        $description = 'which is great on a hot day!';
    break;
        case 'Wednesday':
        $coffee = 'Cappuccino';
        $pic = 'cap.jpg';
        $color = '#8A3904';
        $alt = 'Cappuccino';
        $description = '; bring a little Italy into your life!';
    break;
        case 'Thursday':
        $coffee = 'Peppermint Mocha';
        $pic = 'pepperment.jpg';
        $color = '#A20D1E';
        $alt = 'Peppermint';
        $description = 'celebrate the holidays every Thursday!';
    break;
        case 'Friday':
        $coffee = 'Frappe';
        $pic = 'frappe.jpg';
        $color = '#638D01';
        $alt = 'Frappe';
        $description = 'the calories don\'t count on a Friday';
    break;
          case 'Saturday':
        $coffee = 'Chai Tea Latte';
        $pic = 'chaitea.jpg';
        $color = '#BE584C';
        $alt = 'Chai Tea Latte';
        $description = 'this one\'s for the tea lover!';
    break;
    default: 
        $coffee = "Espresso"; 
        $pic = 'espresso.jpg';
        $color = 'black';
        $alt = 'Espresso';
        $description = 'it\'s hard to beat a classic!';
}



?>

    ?>
<?php get_header()?>
<h2><b>Daily Coffee Specials</b></h2>

<p><a href="?day=Sunday">Sunday</a></p>
<p><a href="?day=Monday">Monday</a></p>
<p><a href="?day=Tuesday">Tuesday</a></p>
<p><a href="?day=Wednesday">Wednesday</a></p>
<p><a href="?day=Thursday">Thursday</a></p>
<p><a href="?day=Friday">Friday</a></p>
<p><a href="?day=Saturday">Saturday</a></p>

 <p>
    
    <strong class="feature"><?=$day?>'s Coffee Special:</strong> <?=$day?>'s daily coffee special is <strong class="feature"><?=$coffee?></strong>, <?=$description?></p>
    <p><span class="feature"><?=$coffee?> is </span> Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical.</p>
    <p><span class="feature">Enjoy <?=$coffee?> with our </span> Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin.</p>
		 <p>



<?php get_footer()?>