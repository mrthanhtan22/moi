<?php $this->load->view('admin/trangchu/head', $this->data) ?>

<div class="line"></div>

<div class="wrapper">
      <!-- Form -->
    <form enctype="multipart/form-data" method="post" action="<?php echo admin_url('trangchu/edit') ?>" id="form" class="form">
      <fieldset>
        <div class="widget">
            <div class="title">
            <img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/add.png">
            <h6>Chỉnh sửa trang chủ</h6>
          </div>
          
            <ul class="tabs">
                    <li class="activeTab"><a href="#tab1">Thông tin chung</a></li>
                    <li class=""><a href="#tab2">SEO Onpage</a></li>
                    <li class=""><a href="#tab3">Bài viết</a></li>
                    
          </ul>
          
          <div class="tab_container">
          <?php foreach ($trangchu as $row): ?>
            
          
               <div class="tab_content pd0" id="tab1" style="display: block;">
                             <div class="formRow">
            <label for="param_name" class="formLeft">Tiêu đề:<span class="req">*</span></label>
            <div class="formRight">
              <span class="oneTwo"><input type="text" _autocheck="true" id="param_title" name="title" value="<?php echo $row->title ?>"></span>
              <span class="autocheck" name="name_autocheck"></span>
              <div class="clear error" name="name_error"></div>
            </div>
            <div class="clear"></div>
          </div>


            

    <div class="formRow hide"></div>
             </div>
             
             <div class="tab_content pd0" id="tab2" style="display: none;">
                      


              <div class="formRow">
                <label for="param_meta_desc" class="formLeft">Meta description:</label>
                <div class="formRight">
                  <span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_meta_desc"  name="meta_desc"><?php echo $row->meta_desc?></textarea></span>
                  <span class="autocheck" name="meta_desc_autocheck"></span>
                  <div class="clear error" name="meta_desc_error"></div>
                </div>
                <div class="clear"></div>
              </div>

              <div class="formRow">
                <label for="param_meta_key" class="formLeft">Meta keywords:</label>
                <div class="formRight">
                  <span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_meta_key" name="meta_key"><?php echo $row->meta_key ?></textarea></span>
                  <span class="autocheck" name="meta_key_autocheck"></span>
                  <div class="clear error" name="meta_key_error"></div>
                </div>
                <div class="clear"></div>
              </div>
                 <div class="formRow hide"></div>
             </div>
             
             <div class="tab_content pd0" id="tab3" style="display: none;">
                  <div class="formRow">
                              <label class="formLeft">Nội dung:</label>
                              <div class="formRight">
                                <textarea class="editor" id="param_content"  name="content"><?php echo $row->content ?></textarea>
                                <div class="clear error" name="content_error"></div>
                              </div>
                              <div class="clear"></div>
                            </div>
                  <div class="formRow hide"></div>
             </div>
            
            <?php endforeach ?>
              </div><!-- End tab_container-->
              
              <div class="formSubmit">
                  <input type="submit" class="redB" value="Cập nhật">
                  <input type="reset" class="basic" value="Cancel" onclick="window.location.href = '<?php echo admin_url('trangchu') ?>'; ">
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