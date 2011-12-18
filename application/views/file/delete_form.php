<div style="text-align:center">
  <?php echo form_open('file/delete/'.$id); ?>
			<?php if(isset($msg)) echo "<p>".$msg."</p>"; ?>
			<p>You are about to delete the following upload:</p>
			<table style="margin: auto">
			<?php if($filedata): ?>
				<tr>
					<td class="title">ID</td>
					<td class="text"><a href="<?php echo site_url($id); ?>/"><?php echo $id; ?></a></td>
				</tr>
				<tr>
					<td class="title">Filename</td>
					<td class="text"><?php echo $filedata["filename"]; ?></td>
				</tr>
				<tr>
					<td class="title">Date of upload</td>
					<td class="text"><?php echo date("r", $filedata["date"]); ?></td>
				</tr>
				<tr>
					<td class="title">Size</td>
					<td class="text"><?php echo format_bytes($filedata["size"]); ?></td>
				</tr>
				<tr>
					<td class="title">Mimetype</td>
					<td class="text"><?php echo $filedata["mimetype"]; ?></td>
				</tr>
			<?php endif; ?>
				<tr>
					<td class="title">Password</td>
					<td class="text">
						<input type="password" name="password" size="10" />
						<input type="submit" value="Delete" name="process" />
					</td>
				</tr>
			</table>
  </form>
</div>
