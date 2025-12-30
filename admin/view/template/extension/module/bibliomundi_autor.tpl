<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
	<div class="page-header">
		<div class="container-fluid">
			<div class="pull-right">
				<button type="submit" form="form-featured" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
				<a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
			</div>
			<h1><?php echo $heading_title; ?></h1>
			<ul class="breadcrumb">
				<?php foreach ($breadcrumbs as $breadcrumb) { ?>
				<li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="container-fluid">
		<?php if ($error_warning) { ?>
		<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
			<button type="button" class="close" data-dismiss="alert">&times;</button>
		</div>
		<?php } ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-pencil"></i><?php echo $text_global_setting; ?></h3>
			</div>
			<div class="panel-body">
				<form action="<?php echo $action; ?>" method="post" id="form-autor-settings" class="form-horizontal">
					<fieldset>
						<legend><?php echo $text_setting_autor; ?></legend>
						<div class="form-group">
							<label class="col-sm-2 control-label"><?php echo $text_autor_save; ?></label>
							<div class="col-sm-10">
								<input type="radio" name="BBM_AUTOR_INSERT_TYPE" value="1" checked /> <?php echo $text_autor_save_tag ?><br />
								<input type="radio" name="BBM_AUTOR_INSERT_TYPE" value="2" /> <?php echo $text_autor_save_category ?><br />
								<input type="radio" name="BBM_AUTOR_INSERT_TYPE" value="3" /> <?php echo $text_autor_save_none ?><br />
								<i><?php echo $text_autor_save_info ?></i>
							</div>
						</div>						
					</fieldset>				
				</form>
			</div>
		</div>
	</div>
</div>
<?php echo $footer; ?>