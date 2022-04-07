<?php
$SQL_PAGES = "SELECT titulo,link FROM tb_pages_links ORDER BY id";
$SQL_PAGES = mysqli_query($connect, $SQL_PAGES);
while($SQL_PAGES_Q = mysql_fetch_assoc($SQL_PAGES)){
$PGS_LINKS = html_entity_decode($SQL_PAGES_Q["titulo"]);
$PAGES_LINKS[$PGS_LINKS] = html_entity_decode($SQL_PAGES_Q["link"]);
}
?>
<div class="content_right">
    	<div class="box_pages">
        <?php if(!empty($PAGES_LINKS["facebook"])){ ?>
        <a href="<?php echo $PAGES_LINKS["facebook"]; ?>" target="_blank"><img src="<?php echo PATH ?>_images/pages/facebook-min.jpg" class="shot_pages" title="Facebook <?php echo BAND ?>" alt="Facebook <?php echo BAND ?>" /></a>
        <?php } ?>
        <?php if(!empty($PAGES_LINKS["youtube"])){ ?>
        <a href="<?php echo $PAGES_LINKS["youtube"]; ?>" target="_blank"><img src="<?php echo PATH ?>_images/pages/youtube-min.jpg" class="shot_pages"  alt="Youtube <?php echo BAND ?>" title="Youtube <?php echo BAND ?>" /></a>
        <?php } ?>
        <?php if(!empty($PAGES_LINKS["soundcloud"])){ ?>
        <a href="<?php echo $PAGES_LINKS["soundcloud"]; ?>" target="_blank"><img src="<?php echo PATH ?>_images/pages/soundcloud-min.jpg" class="shot_pages"  alt="Soundcloud <?php echo BAND ?>" /></a>
        <?php } ?>
        <?php if(!empty($PAGES_LINKS["twitter"])){ ?>
        <a href="<?php echo $PAGES_LINKS["twitter"]; ?>" target="_blank"><img src="<?php echo PATH ?>_images/pages/twitter-min.jpg" class="shot_pages" title="Twitter <?php echo BAND ?>"  alt="Twitter <?php echo BAND ?>" /></a>
        <?php } ?>
        <?php if(!empty($PAGES_LINKS["instagram"])){ ?>
        <a href="<?php echo $PAGES_LINKS["instagram"]; ?>" target="_blank"><img src="<?php echo PATH ?>_images/pages/instagram-min.jpg" class="shot_pages"  alt="Instagram <?php echo BAND ?>" title="Instagram <?php echo BAND ?>" /></a>
        <?php } ?>
        <?php if(!empty($PAGES_LINKS["myspace"])){ ?>
        <a href="<?php echo $PAGES_LINKS["myspace"]; ?>" target="_blank"><img src="<?php echo PATH ?>_images/pages/myspace-min.jpg" class="shot_pages" title="Myspace <?php echo BAND ?>" alt="Myspace <?php echo BAND ?>" /></a>
        <?php } ?>
        </div>
        <br clear="all" />
    	<?php if(BLOG == "ON"){ ?>
        <?php
			$SQL_BLOG = "SELECT a.id, a.t_titulo, b.t_name FROM tb_posts a LEFT JOIN tb_users b ON a.id_user = b.id WHERE type = 'press' AND (status = 'on') ORDER BY a.dt_cad DESC LIMIT 5";
			$SQL_BLOG = mysqli_query($connect, $SQL_BLOG);
			$SQL_BLOG_N = mysqli_num_rows($SQL_BLOG);
			if($SQL_BLOG_N > 0){
			?>
        <div class="box_content">
        	<form name="form_newsletter" id="form_newsletter" action="<?php echo PATH?>sub-form/" method="post">
        	<input type="hidden" name="req" value="sign-news" />
            <label class="title"><a href="<?php echo PATH?>blog/"><span>Blog</span></a></label>
            <div class="both">&nbsp;</div>
            <div class="form_newsletter">
            
            <ul class="latest_blog">
            <?php 
			while($SQL_BLOG_Q = mysql_fetch_assoc($SQL_BLOG)){
			$id = ent($SQL_BLOG_Q["id"], "2");
			$t_titulo = ent($SQL_BLOG_Q["t_titulo"], "2");
			$t_name = ent($SQL_BLOG_Q["t_name"], "2");
			$t_url = make_url($id."-".$t_titulo, "1");
			?>
            <li><a href="<?php echo PATH ?>view-post/<?php echo $t_url; ?>"><?php echo $t_titulo; ?></a><br /><span style="font-size:10px;">(by <?php echo $t_name; ?>)</span></li>
            <?php 
			}
			?>
            </ul>
            
            <div class="both">&nbsp;</div>
            </div>
            </form>
        </div>
        <?php 
			}
		}
			?>
            <?php if(NEWSLETTER == "ON"){ ?>
        <div class="box_content">
        	<form name="form_newsletter" id="form_emails" action="<?php echo PATH?>sub-form/" method="post">
        	<input type="hidden" name="req" value="sign-news" />
            <label class="title"><span>Newsletter</span></label>
            <div class="both">&nbsp;</div>
            <div class="form_newsletter">
            <input type="text" value="Name" name="t_name" id="t_name" class="txt required" />
            <input type="text" value="E-mail" name="t_email" id="t_email" class="txt required email" />
            <input type="image" src="<?php echo PATH ?>_images/btn_w130_subscribe.png" class="btn_subscribe" />
            <div class="both">&nbsp;</div>
            </div>
            </form>
        </div>
        <?php 
			}
		$twitter_link = query("tb_pages_links", "link", "WHERE titulo = 'twitter'"); 
		if(!empty($twitter_link)){
		?>
        <div class="box_content">
        	<label class="title"><span>Twitter News</span></label>
            <div class="both">&nbsp;</div>
            <div class="twitter_follow">
                <a class="twitter-timeline" href="<?php echo $twitter_link; ?>" data-widget-id="436106646939394048"></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


            </div>
            <br clear="all" />
            <div class="both">&nbsp;</div>
        </div>
        <?php } ?>
    </div>
	
	</div>