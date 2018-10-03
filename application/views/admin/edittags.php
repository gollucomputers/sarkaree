<div id="main-content"> <!-- Main Content Section with everything -->

<?php if($this->session->flashdata('edited')): ?>
<div class="notification success png_bg">
				<a href="#" class="close"><img src="<?php echo base_url(); ?>assets/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					<?php echo $this->session->flashdata('edited'); ?>
				</div>
</div>
<?php endif; ?>

<?php if(validation_errors()): ?>
<div class="notification error png_bg">
				<a href="#" class="close"><img src="<?php echo base_url(); ?>assets/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					<?php echo validation_errors(); ?>
				</div>
</div>
<?php endif; ?>

<h2>Edit Tags </h2>
<form method="post" action="<?php echo base_url('admin/edittagss/'.$tagsdetails->tag_id); ?>">
<table>
	<tr>
		<td>Tags Name : </td>
		<td><input type="text" name="title" size="40" value="<?php echo $tagsdetails->title; ?>" /></td>
	</tr>
	<tr>
		<td>Tags Description : </td>
		<td><textarea name="description"><?php echo $tagsdetails->description; ?></textarea></td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" name="edit" value="Edit Tags">
		</td>
	</tr>
</table>
</form>		
			
			
			
			
<div class="clear"></div> <!-- End .clear -->
			
			
