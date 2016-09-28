<!-- head -->
<?php $this->load->view('admin/news/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">
      <!-- Form -->
    <form enctype="multipart/form-data" method="post" action="<?php echo admin_url('lienhe/edit') ?>" id="form" class="form">
      <fieldset>
        <div class="widget">
            <div class="title">
            <img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/add.png">
            <h6>Chỉnh sửa trang tĩnh</h6>
          </div>
          
            <ul class="tabs">
                   
                   
                    <li class=""><a href="#tab1">Trang liên hệ:</a></li>
                    
          </ul>
          
          <div class="tab_container">
             <div class="tab_content pd0" id="tab1" style="display: none;">
                  <div class="formRow">
                    <label class="formLeft">Nội dung:</label>
                    <div class="formRight">
                    <?php foreach ($lienhe as $row): ?>
                      
                    <?php endforeach ?>
                      <textarea class="editor" id="param_content"  name="content"><?php echo $row->content ?></textarea>
                      <div class="clear error" name="content_error"></div>
                    </div>
                    <div class="clear"></div>
                   </div>
                  <div class="formRow hide"></div>
             </div>
            
            
              </div><!-- End tab_container-->
              
              <div class="formSubmit">
                  <input type="submit" class="redB" value="Cập nhật">
                  <input type="reset" class="basic" value="Cancel" onclick="window.location.href = '<?php echo admin_url('lienhe') ?>'; ">
                </div>
              <div class="clear"></div>
        </div>
      </fieldset>
    </form>
</div>
<div class="clear mt30"></div>
<script>
var editor = CKEDITOR.replace( 'param_content', {
    filebrowserBrowseUrl : '<?php echo public_url('js_chung')?>/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : '<?php echo public_url('js_chung')?>/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : '<?php echo public_url('js_chung')?>/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : '<?php echo public_url('js_chung')?>/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : '<?php echo public_url('js_chung')?>/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : '<?php echo public_url('js_chung')?>/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor, '../' );
</script>