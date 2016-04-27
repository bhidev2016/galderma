<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

//echo "<pre>";print_r($row->_field_data['nid']['entity']);
//die;
/*--------------Before treatment-------------------*///echo $fields["field_user_type"]->content;
$explodeBefore = explode('</div>',explode('<div class="field-content">', $fields["field_resource_centre_document"]->content)[1]);
if(!empty($explodeBefore[0])){
  $text = $fields["field_resource_centre_document"]->content;
  preg_match_all('~<a(.*?)href="([^"]+)"(.*?)>~', $text, $matches);

  $str = $matches[2][0];
  preg_match_all('!\d+!', $str, $fid);
  $file = file_load($fid[0][0]);
  $uri = $file->uri;
  $url = file_create_url($uri);
  $ext = pathinfo($file->filename, PATHINFO_EXTENSION);
  if($ext == 'pdf')
  {
    $classIcon = 'pdf_icon';
  }elseif($ext == 'mp4')
  {
    $classIcon = 'videoicon';
  }
  else{
    $classIcon = "jpgicon";
  }
}else{
    $classIconAfter = "jpgicon";
  }
/*--------------Before treatment-------------------*/
/*--------------after treatment-------------------*/
$explodeAfter = explode('</div>',explode('<div class="field-content">', $fields["field_resource_centre_document_2"]->content)[1]);
//echo $explodeAfter[0];
if(!empty($explodeAfter[0])){
  $textafter = $fields["field_resource_centre_document_2"]->content;
  preg_match_all('~<a(.*?)href="([^"]+)"(.*?)>~', $textafter, $matchesAfter);

  $strAfter = $matchesAfter[2][0];
  preg_match_all('!\d+!', $strAfter, $fid);
  $fileAfter = file_load($fid[0][0]);
  $uriAfter = $fileAfter->uri;
  $urlAfter = file_create_url($uriAfter);
  $extAfter = pathinfo($fileAfter->filename, PATHINFO_EXTENSION);
  if($extAfter == 'pdf')
  {
    $classIconAfter = 'pdf_icon';
  }
  elseif($extAfter == 'mp4')
  {
    $classIconAfter = 'videoicon';
  }
  else{
    $classIconAfter = "jpgicon";
  }
}
else{
    $classIconAfter = "jpgicon";
  }
/*--------------after treatment-------------------*///echo $fields["field_user_type"]->content.'k';
if($fields["field_resource_centre_type"]->content == '<div class="field-content">Double</div>'){
!empty(explode('</div>',explode('<div class="field-content">', $fields["field_resource_centre_sub_title"]->content)[1])[0]) ? $title = '-'.explode('</div>',explode('<div class="field-content">', $fields["field_resource_centre_sub_title"]->content)[1])[0] :$title = '';
!empty(explode('</div>',explode('<div class="field-content">', $fields["field_resource_centre_sub_title2"]->content)[1])[0]) ? $title2 = '-'.explode('</div>',explode('<div class="field-content">', $fields["field_resource_centre_sub_title2"]->content)[1])[0] :$title2 = '';

?>
<div class="clearfix iconcomponent <?php echo $classIcon; ?>">
<div class="t_table br_table clearfix"> 
	<div class="t_trow">
        <div class="t_tcell tcell_40 v_middle">
            <div class="left_head">
           		<h3><?php  print $fields["title"]->content.$title; ?></h3>
                 <?php if(strlen($fields["body"]->content) > 100) print substr($fields["body"]->content, 0,100).'</p></div>'; else print $fields["body"]->content; ?>
            </div>
        </div>
        <div class="t_tcell tcell_30 v_middle">
            <div class="b_bottom">
                <div><?php   print $fields["field_resource_centre_subcategor"]->content; ?></div>
                <div><?php  print $fields["field_resource_centre_tags"]->content; ?></div>
             </div>
        </div>
        <?php if(isset($file->filename)){ ?>
        <div class="t_tcell tcell_30 v_middle">
            <div class="b_btn_holder">
                <div><a href="<?php echo $url; ?>" target="_blank" class="b_btn">View</a></div>
                <?php
                if($fields["field_user_type"]->content == '<div class="field-content">user</div>'){
                 ?>
                <div><a class="b_btn request_btn" href="#request" title="<?php print str_replace(array('<span class="field-content">',"</span>"), array('',''), $fields["title"]->content); ?>">Request</a></div>
                <?php }
                else{
                  ?>
                  <div><a href="<?php echo $matches[2][0]; ?>" class="b_btn">Download</a></div>
                  <?php
                } ?>
            </div>
        </div>
        <?php } ?>
      </div>  <!--end t_trow -->
</div>
</div>
<div class="clearfix iconcomponent <?php echo $classIconAfter; ?>">
<div class="t_table br_table clearfix"> 
  <div class="t_trow">
        <div class="t_tcell tcell_40 v_middle">
            <div class="left_head">
              <h3><?php  print $fields["title"]->content.$title2; ?></h3>
                 <?php if(strlen($fields["field_body_2"]->content) > 100) print substr($fields["field_body_2"]->content, 0,100).'</p></div>'; else print $fields["field_body_2"]->content; ?>
            </div>
        </div>
        <div class="t_tcell tcell_30 v_middle">
            <div class="b_bottom">
                <div><?php   print $fields["field_resourcecentresubcategory2"]->content; ?></div>
                <div><?php  print $fields["field_resource_centre_tags_2"]->content; ?></div>
             </div>
        </div>
        <div class="t_tcell tcell_30 v_middle">
            <div class="b_btn_holder">
        <?php if(isset($fileAfter->filename)){ ?>
        
                <div><a href="<?php echo $urlAfter; ?>" target="_blank" class="b_btn">View</a></div>
                <?php
                if($fields["field_user_type_2"]->content == '<div class="field-content">user</div>'){
                 ?>
                <div><a class="b_btn request_btn" href="#request" title="<?php print str_replace(array('<span class="field-content">',"</span>"), array('',''), $fields["title"]->content); ?>">Request</a></div>
                <?php }
                else{
                  ?>
                  <div><a href="<?php echo $matchesAfter[2][0]; ?>" class="b_btn">Download</a></div>
                  <?php
                } ?>
            
        <?php } ?>
        </div>
        </div>
      </div>  <!--end t_trow -->
</div>
</div>
<?php 
}
else{//echo explode('</div>',explode('<div class="field-content">', $fields["field_resource_centre_sub_title"]->content)[1])[0].'hh';
  !empty(explode('</div>',explode('<div class="field-content">', $fields["field_resource_centre_sub_title"]->content)[1])[0]) ? $title = '-'.explode('</div>',explode('<div class="field-content">', $fields["field_resource_centre_sub_title"]->content)[1])[0] :$title = '';
  ?>
  <div class="clearfix iconcomponent <?php echo $classIcon; ?>">
<div class="t_table br_table clearfix"> 
  <div class="t_trow">
        <div class="t_tcell tcell_40 v_middle">
            <div class="left_head">
              <h3><?php  print $fields["title"]->content.$title; ?></h3>
                 <?php if(strlen($fields["body"]->content) > 100) print substr($fields["body"]->content, 0,100).'</p></div>'; else print $fields["body"]->content; ?>
            </div>
        </div>
        <div class="t_tcell tcell_30 v_middle">
            <div class="b_bottom">
                <div><?php   print $fields["field_resource_centre_subcategor"]->content; ?></div>
                <div><?php  print $fields["field_resource_centre_tags"]->content; ?></div>
             </div>
        </div>
        <?php if(isset($file->filename)){ ?>
        <div class="t_tcell tcell_30 v_middle">
            <div class="b_btn_holder">
                <div><a href="<?php echo $url; ?>" target="_blank" class="b_btn">View</a></div>
                <?php
                if($fields["field_user_type"]->content == '<div class="field-content">user</div>'){
                 ?>
                <div><a class="b_btn request_btn" href="#request" title="<?php print str_replace(array('<span class="field-content">','</span>'), array('',''), $fields['title']->content); ?>">Request</a></div>
                <?php }
                else{
                  ?>
                  <div><a href="<?php echo $matches[2][0]; ?>" class="b_btn">Download</a></div>
                  <?php
                } ?>
                
            </div>
        </div>
        <?php } ?>
      </div>  <!--end t_trow -->
</div>
</div>
  <?php
}?>



