<?php if(!defined("__XE__"))exit;?><!--#Meta:widgetstyles/nico/style.css--><?php $__tmp=array('widgetstyles/nico/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php 
  $__Context->sColor = $__Context->widgetstyle_extra_var->ws_startcolor;
  $__Context->eColor = $__Context->widgetstyle_extra_var->ws_endcolor;
  $__Context->ifColor = false;
 ?>
<?php if($__Context->sColor && $__Context->eColor){ ?>
  <?php if(preg_match('/^[\(\),#a-grA-G0-9]+$/', $__Context->sColor) && preg_match('/^[\(\),#a-grA-G0-9]+$/', $__Context->eColor)){ ?>
    <?php 
      $__Context->ifColor = true;
      $__Context->wColor = array($__Context->sColor,$__Context->eColor);
     ?>
    <?php for($__Context->i=0;$__Context->i<2;$__Context->i++){ ?>
      <?php if($__Context->wColor[$__Context->i]){ ?>
        <?php if(substr($__Context->wColor[$__Context->i],0,4) == "rgba"){ ?>
          <div class="message error">
            <p>
              <b>Nico Widget Style</b><br/>
              그라데이션 색상에 rgba는 사용이 불가능합니다.
            </p>
          </div>
        <?php }else if(substr($__Context->wColor[$__Context->i],0,3) == "rgb"){ ?>
          <?php 
            $__Context->temp = split(",",str_replace("rgb","",str_replace(")","",str_replace("(","",$__Context->wColor[$__Context->i]))));
            $__Context->wColor[$__Context->i] = "#";
           ?>
          <?php for($__Context->j=0;$__Context->j<3;$__Context->j++){ ?>
            <?php  $__Context->temp2 = dechex($__Context->temp[$__Context->j]) ?>
            <?php if(strlen($__Context->temp2) == 1){ ?>
              <?php  $__Context->temp2 = "0".$__Context->temp2 ?>
            <?php } ?>
            <?php $__Context->wColor[$__Context->i] .= $__Context->temp2 ?>
          <?php } ?>
        <?php }else if(substr($__Context->wColor[$__Context->i],0,1) == "#" && strlen($__Context->wColor[$__Context->i]) == 4){ ?>
          <?php  $__Context->temp = array() ?>
          <?php for($__Context->j=0;$__Context->j<4;$__Context->j++){ ?>
            <?php  $__Context->temp[$__Context->j] = substr($__Context->wColor[$__Context->i],$__Context->j,1) ?>
          <?php } ?>
          <?php 
            $__Context->wColor[$__Context->i] = "#";
           ?>
          <?php for($__Context->j=1;$__Context->j<4;$__Context->j++){ ?>
            <?php  $__Context->wColor[$__Context->i] .= $__Context->temp[$__Context->j].$__Context->temp[$__Context->j] ?>
          <?php } ?>
        <?php } ?>
      <?php } ?>
    <?php } ?>
  <?php }else{ ?>
    <div class="message error">
      <p>
        <b>Nico Widget Style</b><br/>
        색상 형식이 잘못되었습니다.<br /><br />
        RGB : rgb(0,0,0)<br />
        색상명 : black<br />
        16진수 : #000000<br />
        16진수 단축 : #000
      </p>
    </div>
  <?php } ?>
<?php }else if($__Context->sColor || $__Context->eColor){ ?>
  <div class="message error">
    <p>
      <b>Nico Widget Style</b><br/>
      그라데이션 색상은 위쪽 색상과 아래쪽 색상을 모두 적어주셔야 합니다.
    </p>
  </div>
<?php } ?>
<div class="ws_nico">
  <div class="css3pie ws_nico_title" style="<?php if($__Context->ifColor){ ?>
  background:<?php echo $__Context->wColor[1] ?>;
  filter:progid:DXImageTransform.Microsoft.gradient(StartColorStr=#ffffff,EndColorStr=<?php echo $__Context->wColor[1] ?>,GradientType=0);
  background:-webkit-gradient(linear, 0 0, 0 bottom, from(#fff), to(<?php echo $__Context->wColor[1] ?>));
  background:-webkit-linear-gradient(<?php echo $__Context->wColor[0] ?>, <?php echo $__Context->wColor[1] ?>);
  background:-moz-linear-gradient(<?php echo $__Context->wColor[0] ?>, <?php echo $__Context->wColor[1] ?>);
  background:-ms-linear-gradient(<?php echo $__Context->wColor[0] ?>, <?php echo $__Context->wColor[1] ?>);
  background:-o-linear-gradient(<?php echo $__Context->wColor[0] ?>, <?php echo $__Context->wColor[1] ?>);
  background:linear-gradient(<?php echo $__Context->wColor[0] ?>, <?php echo $__Context->wColor[1] ?>);
  <?php };
if($__Context->widgetstyle_extra_var->ws_bordercolor){ ?>border-color:<?php echo $__Context->widgetstyle_extra_var->ws_bordercolor ?>;<?php } ?>">
    <?php if($__Context->widgetstyle_extra_var->ws_title_link){ ?>
      <a href="<?php echo $__Context->widgetstyle_extra_var->ws_title_link ?>" target="_blank">
      <?php } ?>
        <?php echo $__Context->widgetstyle_extra_var->ws_title ?>
      <?php if($__Context->widgetstyle_extra_var->ws_title_link){ ?>
      </a>
    <?php } ?>
    <div class="ws_nico_arrow_border"<?php if($__Context->widgetstyle_extra_var->ws_bordercolor){ ?> style="border-top:10px solid <?php echo $__Context->widgetstyle_extra_var->ws_bordercolor ?>;"<?php } ?>></div>
    <div class="ws_nico_arrow_bg" <?php if($__Context->ifColor){ ?>style="border-top:10px solid <?php echo $__Context->wColor[1] ?>"<?php } ?>></div>
  </div>
  <div class="ws_nico_content<?php if($__Context->widgetstyle_extra_var->ws_border == 'O'){ ?> ws_nico_border<?php } ?>">
    <?php echo $__Context->widget_content ?>
  </div>
</div>