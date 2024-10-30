<div class="update-nag"><br>
	<p><strong>Thank you for using js-chat! </strong><span style="color:#990000;">If you think this software is useful please support the development with a donation or <a href="http://wordpress.org/extend/plugins/js-chat/stats/" target="_blank">rate this Plugin</a>.</span><br>Feel free to contact me for support or feature requests at <a href="https://groups.google.com/forum/#!forum/js-chat" >https://groups.google.com/forum/#!forum/js-chat</a><br>
	</p><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="SQRUU7JKE7KFS">
	<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110429-1/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110429-1/de_DE/i/scr/pixel.gif" width="1" height="1">
	</form>
</div>
<div class="wrap">
<h2>js-chat Options</h2>
<form method="post" action="options.php">
    <?php settings_fields( 'jschatOptions' ); ?>
    <table class="form-table">
        <tr valign="top" rowspan="2">
			<th scope="row" ><strong></strong></th>
        </tr>
        <tr valign="top">
			<td>
				<span>Url</span>
				<input type="text" width="100%" name="url" <?php echo "value=\"".get_option('url','https://js-chat.appspot.com/')."\""; ?> />
			</td>
        </tr>
    </table>
    
    <p class="submit">
		<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
</form>
</div>