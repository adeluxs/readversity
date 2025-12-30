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
				<form action="<?php echo $action; ?>" method="post" id="form-global-settings" class="form-horizontal">
					<fieldset>
						<input type="hidden" name="bbm_view" value="sync" />
						<legend><?php echo $text_import_notice; ?></legend>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="client_id"><?php echo $text_client_id; ?></label>
							<div class="col-sm-10">
								<input type="text" name="BBM_OPTION_CLIENT_ID" id="client_id" value="<?php echo $client_id; ?>" class="form-control" />
								<?php if ($error_client_id) { ?>
								<div class="text-danger"><?php echo $error_client_id; ?></div>
								<?php } ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="client_secret"><?php echo $text_client_secret; ?></label>
							<div class="col-sm-10">
								<input type="text" name="BBM_OPTION_CLIENT_SECRET" id="client_secret" value="<?php echo $client_secret; ?>" class="form-control" />
								<?php if ($error_client_secret) { ?>
								<div class="text-danger"><?php echo $error_client_secret; ?></div>
								<?php } ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label"><?php echo $text_operation; ?></label>
							<div class="col-sm-10">
								<input type="radio" name="BBM_OPTION_OPERATION" value="1" <?php echo $operation == 1 ? 'checked' : '' ?>  /> <?php echo $text_operation_complete ?><br />
								<input type="radio" name="BBM_OPTION_OPERATION" value="2" <?php echo $operation == 2 ? 'checked' : '' ?>  /> <?php echo $text_operation_update ?><br />
								<i><?php echo $text_operation_info ?></i>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label"><?php echo $text_environment; ?></label>
							<div class="col-sm-10">
								<input type="radio" name="BBM_OPTION_ENVIRONMENT" value="1" <?php echo $environment == 1 ? 'checked' : '' ?> /> <?php echo $text_environment_sandbox ?><br />
								<input type="radio" name="BBM_OPTION_ENVIRONMENT" value="2" <?php echo $environment == 2 ? 'checked' : '' ?> /> <?php echo $text_environment_production ?><br />
							</div>
						</div>
					</fieldset>					
				</form>
			</div>
		</div>
	</div>
</div>
<?php echo $footer; ?>