<div class="beta-content beta-post-show beta-radius3px">
    <?php echo CHtml::form('',  'post', array('class'=>'beta-form-horizontal beta-post-form', 'id'=>'post-form'));?>
    <div class="beta-control-group <?php if ($form->hasErrors('title')) echo 'error';?>">
        <?php echo CHtml::activeLabel($form, 'title', array('class'=>'beta-control-label'));?>
        <div class="beta-controls">
            <?php echo CHtml::activeTextField($form, 'title', array('class'=>'beta-text', 'id'=>'post-title'));?>
            <p class="beta-help-block"><?php echo $form->getError('title');?></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="beta-control-group <?php if ($form->hasErrors('source')) echo 'error';?>">
        <?php echo CHtml::activeLabel($form, 'source', array('class'=>'beta-control-label'));?>
        <div class="beta-controls">
            <?php echo CHtml::activeTextField($form, 'source', array('class'=>'beta-text'));?>
            <p class="beta-help-block"><?php echo $form->getError('source');?></p>
        </div>
        <div class="clear"></div>
    </div>
    <?php if (!user()->checkAccess('editor')):?>
    <div class="beta-control-group <?php if ($form->hasErrors('contributor')) echo 'error';?>">
        <?php echo CHtml::activeLabel($form, 'contributor', array('class'=>'beta-control-label'));?>
        <div class="beta-controls">
            <?php echo CHtml::activeTextField($form, 'contributor', array('class'=>'beta-text'));?>
            <p class="beta-help-block"><?php echo $form->getError('contributor');?></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="beta-control-group <?php if ($form->hasErrors('contributor_site')) echo 'error';?>">
        <?php echo CHtml::activeLabel($form, 'contributor_site', array('class'=>'beta-control-label'));?>
        <div class="beta-controls">
            <?php echo CHtml::activeTextField($form, 'contributor_site', array('class'=>'beta-text', 'id'=>'post-site'));?>
            <p class="beta-help-block"><?php echo $form->getError('contributor_site');?></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="beta-control-group <?php if ($form->hasErrors('contributor_email')) echo 'error';?>">
        <?php echo CHtml::activeLabel($form, 'contributor_email', array('class'=>'beta-control-label'));?>
        <div class="beta-controls">
            <?php echo CHtml::activeTextField($form, 'contributor_email', array('class'=>'beta-text', 'id'=>'post-email'));?>
            <p class="beta-help-block"><?php echo $form->getError('contributor_email');?></p>
        </div>
        <div class="clear"></div>
    </div>
    <?php endif;?>
    <?php if (user()->checkAccess('editor')):?>
    <div class="beta-control-group <?php if ($form->hasErrors('tags')) echo 'error';?>">
        <?php echo CHtml::activeLabel($form, 'tags', array('class'=>'beta-control-label'));?>
        <div class="beta-controls">
            <?php echo CHtml::activeTextField($form, 'tags', array('class'=>'beta-text', 'id'=>'post-tags'));?>
            <p class="beta-help-block"><?php echo $form->getError('tags');?></p>
        </div>
        <div class="clear"></div>
    </div>
    <?php endif;?>
    <div class="beta-control-group stacked <?php if ($form->hasErrors('summary')) echo 'error';?>">
        <label class="beta-control-label"><?php echo t('post_summary', 'model');?>&nbsp;<span class="beta-help-inline"><?php echo $form->getError('summary');?></span></label>
        <div class="beta-controls">
            <?php echo CHtml::activeTextArea($form, 'summary', array('id'=>'beta-summary'));?>
        </div>
        <div class="clear"></div>
    </div>
    <div class="beta-control-group stacked <?php if ($form->hasErrors('content')) echo 'error';?>">
        <label class="beta-control-label"><?php echo t('post_content', 'model');?>&nbsp;<span class="beta-help-inline"><?php echo $form->getError('content');?></span></label>
        <div class="beta-controls">
            <?php echo CHtml::activeTextArea($form, 'content', array('id'=>'beta-content'));?>
        </div>
        <div class="clear"></div>
    </div>
    <?php if (!$form->captchaAllowEmpty()):?>
    <div class="beta-control-group captcha-clearfix <?php echo $captchaClass?>">
        <?php echo CHtml::activeLabel($form, 'captcha', array('class'=>'beta-control-label'));?>
        <div class="beta-controls">
            <?php echo CHtml::activeTextField($form, 'captcha', array('class'=>'beta-captcha beta-text'));?>
            <?php echo $captchaWidget;?>
            <span class="beta-help-inline"><?php echo $form->getError('captcha');?></span>
        </div>
        <div class="clear"></div>
    </div>
    <?php endif;?>
    <div class="beta-form-actions acenter">
        <?php echo CHtml::submitButton(t('submit'), array('class'=>'btn btn-primary'));?>
    </div>
    <?php echo CHtml::endForm();?>
</div>

<div class="beta-sidebar">
    <div class="beta-block beta-small beta-radius3px">
        <h2>投稿必读</h2>
        <ul class="beta-block-content">
            <li>欢迎原创及翻译文章，您的独家报料与独特视角是我们的宝贵财富</li>
            <li>非原创文章必须填写来源</li>
            <li>别忘了署名! 写上您的blog地址,带来意想不到的人气,也可能发现志同道合的网友</li>
            <li>编辑也许会对投递进行适当修改, 以适合在本站发表</li>
        </ul>
    </div>
    <?php if (count($tempPictures) > 0):?>
    <div class="beta-block beta-small beta-radius3px">
        <h2><?php echo t('post_upload_temp_pictures');?></h2>
        <ul class="beta-block-content unstyled temp-pictures">
            <?php foreach ((array)$tempPictures as $picture):?>
            <li><img src="<?php echo $picture->fileUrl;?>" /></li>
            <?php endforeach;?>
        </ul>
    </div>
    <?php endif;?>
</div>
<div class="clear"></div>

<?php cs()->registerScriptFile(sbu('libs/kindeditor/kindeditor-min.js'), CClientScript::POS_END);?>
<?php cs()->registerScriptFile(sbu('libs/kindeditor/config.js'), CClientScript::POS_END);?>

<script type="text/javascript">
$(function(){
	$('#post-title').focus();
    KindEditor.ready(function(K) {
    	var cssPath = ['<?php echo sbu('libs/bootstrap/css/bootstrap.min.css');?>', '<?php echo resbu('styles/beta-common.css');?>', '<?php echo resbu('styles/beta-main.css');?>'];
    	var imageUploadUrl = '<?php echo aurl('upload/image');?>';
    	KEConfig.mini.cssPath = cssPath;
    	KEConfig.mini.uploadJson = imageUploadUrl;
        KEConfig.common.cssPath = cssPath;
        KEConfig.common.uploadJson = imageUploadUrl;
    	var betaSummary = K.create('#beta-summary', KEConfig.mini);
    	var betaContent = K.create('#beta-content', KEConfig.common);
    	$('#post-form').on('submit', {content:betaContent}, BetaPost.create);

    	$(document).on('click', '.temp-pictures li', function(event){
            var html = $(this).html();
            betaContent.insertHtml(html);
        });
    });
});
</script>

