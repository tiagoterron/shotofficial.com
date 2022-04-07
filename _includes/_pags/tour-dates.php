<div class="box_content_middle">
    <label class="title"><h2><?php echo "Tour dates | concerts (European TOUR in April 2018 - new album 'ANIMALS' )"; ?></h2></label>
    <br clear="all" />
    <div id="tabs">
      	<ul>
        	<li><a href="#upcoming-shows">UPCOMING SHOWS</a></li>
            <li><a href="#past-shows">PAST SHOWS</a></li>
        </ul>
<!--      <div class="upcoming_past_events">
      	<a href="<?php echo PATH ?>tour-dates/upcoming/" class="<?php echo $class_gigs_1; ?>">UPCOMING</a> / <a class="<?php echo $class_gigs_2; ?>" href="<?php echo PATH ?>tour-dates/past/">PAST GIGS</a>
      </div>-->
      <div class="both"></div>
      <div id="upcoming-shows">
<?php /*?>      <script charset="utf-8" src="https://widget.bandsintown.com/main.min.js"></script><a class="bit-widget-initializer" data-artist-name="S.H.O.T." data-display-local-dates="false" data-display-past-dates="true" data-auto-style="false" data-text-color="#FFFFFF" data-link-color="#2F95DE" data-popup-background-color="#000000" data-background-color="#000000" data-display-limit="15" data-link-text-color="#FFFFFF"></a><?php */?>
<?php
	  $SQL = "SELECT * FROM tb_events WHERE (date+1) >= NOW() AND status = 'on' ORDER BY date ASC";
	  $SQL = mysqli_query($connect, $SQL);
	  ?>
        <ul class="ul_gigs">
        	<li class="w75">DATE</li>
            <li class="w175">VENUE</li>
            <li class="w175">LOCATION</li>        
            <li class="w50"></li>
        </ul>
        <?php
		if(mysqli_num_rows($SQL)){
		while($SQL_Q = mysql_fetch_assoc($SQL)){
		$date_hour = explode(" ", html_entity_decode($SQL_Q["date"]));
		$hour_type = html_entity_decode($SQL_Q["hour_type"]);
		
		$location = html_entity_decode($SQL_Q["location"]);
		$venue = html_entity_decode($SQL_Q["venue"]);
		$country = html_entity_decode($SQL_Q["country"]);
		$buy_ticket = html_entity_decode($SQL_Q["buy_ticket"]);
		if(!preg_match("/^http:\/\//", $buy_ticket) && $buy_ticket != ""){
		//$buy_ticket = "http://".$buy_ticket;
		}
		

		$t_preco = html_entity_decode($SQL_Q["value_ticket"]);
		$t_preco = number_format($t_preco, 2, ',', '.');
		$moeda = html_entity_decode($SQL_Q["moeda"]);
			switch($moeda){
			case "REAL":
			$moeda = "R$";
			break;
			case "DOLAR":
			$moeda = "USD";
			break;
			case "EURO":
			$moeda = "&#8364;";
			break;
			default:
			$moeda = "";
			break;
			}
		
		$date = explode("-", $date_hour[0]);
		$hour = explode(":", $date_hour[1]);
		$create_time = mktime($hour[0],$hour[1],$hour[2],$date[1],$date[2],$date[0]);
		$day_week = date("l", $create_time);
		$hour = date("H:i", $create_time);
		$day_month = date("d", $create_time);
		$month = date("F", $create_time);
		$month = substr($month, 0, 3);
		$year = date("Y", $create_time);
		?>
        <div class="both"></div>
        <ul class="ul_gigs_show">
       	  <li class="w75 inf"><img class="calendertourdates" width="40px" src="<?php echo PATH ?>_images/calender/<?php echo $month; ?>/<?php echo $day_month; ?>.jpg"></li>
          <li class="w175"><?php echo convertem($venue, "1"); ?></li>
          <li class="w175"><img width="20px" class="flags_country" src="<?php echo PATH ?>_images/flags_gif/<?php echo convertem($country, "0"); ?>.gif" /><?php echo convertem($location, "1"); ?></li>
            <li class="w50 ticket">
            <?php if($buy_ticket){?>
            <a href="<?php echo $buy_ticket; ?>" target="_blank"><img class="calendertourdates" width="25px" src="<?php echo PATH ?>_images/info.png"></a>
            <?php } ?>
            </li>
        </ul>
       <?php
	   }
	   }else{
	   ?>
       <div class="both"></div>
       <div class="no_results">no events</div>
	   <?php
       }
	   ?>
       </div>
      <div id="past-shows">
       <?php
	   $SQL = "SELECT * FROM tb_events WHERE date < NOW() AND status = 'on' ORDER BY date DESC";
	   $SQL = mysqli_query($connect, $SQL);
	   ?>
        <ul class="ul_gigs">
        	<li class="w75">DATE</li>
            <li class="w175">VENUE</li>
            <li class="w175">LOCATION</li>        
            <li class="w50"></li>
        </ul>
        <?php
		if(mysqli_num_rows($SQL)){
		while($SQL_Q = mysql_fetch_assoc($SQL)){
		$date_hour = explode(" ", html_entity_decode($SQL_Q["date"]));
		$hour_type = html_entity_decode($SQL_Q["hour_type"]);
		
		$location = html_entity_decode($SQL_Q["location"]);
		$venue = html_entity_decode($SQL_Q["venue"]);
		$country = html_entity_decode($SQL_Q["country"]);
		$buy_ticket = html_entity_decode($SQL_Q["buy_ticket"]);
		if(!preg_match("/^http:\/\//", $buy_ticket) && $buy_ticket != ""){
		//$buy_ticket = "http://".$buy_ticket;
		}
		

		$t_preco = html_entity_decode($SQL_Q["value_ticket"]);
		$t_preco = number_format($t_preco, 2, ',', '.');
		$moeda = html_entity_decode($SQL_Q["moeda"]);
			switch($moeda){
			case "REAL":
			$moeda = "R$";
			break;
			case "DOLAR":
			$moeda = "USD";
			break;
			case "EURO":
			$moeda = "&#8364;";
			break;
			default:
			$moeda = "";
			break;
			}
		
		$date = explode("-", $date_hour[0]);
		$hour = explode(":", $date_hour[1]);
		$create_time = mktime($hour[0],$hour[1],$hour[2],$date[1],$date[2],$date[0]);
		$day_week = date("l", $create_time);
		$hour = date("H:i", $create_time);
		$day_month = date("d", $create_time);
		$month = date("F", $create_time);
		$month = substr($month, 0, 3);
		$year = date("Y", $create_time);
		?>
        <div class="both"></div>
        <ul class="ul_gigs_show">
       	  <li class="w75 inf"><img class="calendertourdates" width="40px" src="<?php echo PATH ?>_images/calender/<?php echo $month; ?>/<?php echo $day_month; ?>.jpg"></li>
          <li class="w175"><?php echo convertem($venue, "1"); ?></li>
          <li class="w175"><img width="20px" class="flags_country" src="<?php echo PATH ?>_images/flags_gif/<?php echo convertem($country, "0"); ?>.gif" /><?php echo convertem($location, "1"); ?></li>
            <li class="w50 ticket">
            <?php if($buy_ticket){?>
            <?php /*?><a href="<?php echo $buy_ticket; ?>" target="_blank"><img class="calendertourdates" width="25px" src="<?php echo PATH ?>_images/info.png"></a><?php */?>
            <?php } ?>
            </li>
        </ul>
       <?php
	   }
	   }else{
	   ?>
       <div class="both"></div>
       <div class="no_results">no events</div>
	   <?php
       }
	   ?>
       </div>
       </div>
<!--BEGIN-->
<br clear="all" /><br clear="all" />
<div class="addthis_toolbox addthis_default_style " style="margin:15px 15px 0px 20px;">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e219b574ee2ad73"></script>
<!-- AddThis Button END -->
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<fb:comments style="margin:10px 20px;" href="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-colorscheme="dark" num_posts="4" width="500px"></fb:comments>
<hr size="1" color="#999999" style="width:500px;margin:20px;" />
<br clear="all" />
<!--END-->
</div>