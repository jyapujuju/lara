<?php
/**
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *Template Name: books
 * @package portal
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();?><?php  $cats = get_categories('orderby=id&order=ASC&child_of=7'); 
foreach ($cats as $cat) : ?>
<?php query_posts( 'orderby=date&order=ASC&cat='.$cat->term_id );
if (have_posts()) : while (have_posts()) : the_post();$do_not_duplicate = $post->ID;
$postID = $post->ID;
$key_image = get_post_meta ($postID, 'image', true );
$subject_title[] = array("post_cat"=>$cat->cat_name,"post_tittle"=>get_the_title(),"image_url"=>$key_image);
?>
<?php endwhile; endif; wp_reset_query(); endforeach; $length = count($subject_title);?>
<script type="text/javascript">
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
</script>
<div class="[ container text-center ] paper">
  <div class="row">
    <span class="box-icon">
      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/04/books.png" alt="Generic placeholder image" style="width: 71px; height: 89px;margin-top:16px;">
    </span>
    <h3 style="text-align: center;padding-bottom:30px;">Books</h3>
    <p class="paragraph">Notes are designed with students perspective. subject title are kept as slang word popular among the student. We working continuesly on dynamic content. pictorail diagram are being converted to the vector form. line and blocks are being colored for better understanding in circuit diagram. picture are less encouraged to lower the file size.</p>   
    <?php for($i=1;$i<8;$i=$i+2){ ?>
    <div class="col-lg-12 grey box">
      <h3 class="centering">
      <?php if($i==1){
        echo "Freshman Year";
        }
        elseif ($i==3){
          echo "Sophomore";
        }
        elseif ($i==5){
          echo"junior"; 
        }
        elseif($i==7){
          echo "senior"; 
        }
        else{
          //echo "string";
        }
         ?>
        </h3>
      <div class="col-lg-1 "></div>  
      <div class="col-lg-4 mint download_li box">
        <div><span class=" glyphicon glyphicon-bookmark bookmark"><div class="sem col-md-1"><?php echo $i;?><sup><?php if($i==1){echo "st";}elseif ($i==3){echo "rd";}else{echo "th";}?></sup></div></span></div>
        <div class="col-lg-3 full-width">
          <?php foreach ($subject_title as $sub) {?>
          <?php if($sub["post_cat"]==$i){?>
            <a href="<?php echo $sub["image_url"];?>" data-toggle="tooltip" data-placement="right" data-original-title="Statistics-I"><?php echo $sub["post_tittle"];?></a>
            <?php }}?>
          </div>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-4 mint download_li box">
          <div><span class=" glyphicon glyphicon-bookmark bookmark"><div class="sem col-md-1"><?php echo $i+1;?><sup><?php if($i+1==2){echo "nd";}else{echo "th";}?></sup></div></span></div>
          <div class="col-lg-3 full-width">
          <?php foreach ($subject_title as $sub) {?>
          <?php if($sub["post_cat"]==$i+1){?>
            <a href="<?php echo $sub["image_url"];?>" data-toggle="tooltip" data-placement="right" data-original-title="Discrete Structure"><?php echo $sub["post_tittle"];?></a>
           <?php }}?>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div>
      <?php }?>
    </div>
  </div>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>