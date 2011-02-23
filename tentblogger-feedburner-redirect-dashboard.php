<![CDATA[ TentBlogger FeedBurner 1.0 ]]>
<?php $options = get_option('tentblogger-feedburner'); ?>
<div class="wrap">
	<h2>
		<?php _e("TentBlogger's FeedBurner RSS Redirect Plugin", "tentblogger-feedburner"); ?>
	</h2>
	<div class="tentblogger-postbox postbox">
		<h3 class="tentblogger-hndle hndle">
			<span>
				<?php _e("FeedBurner RSS Redirection", "tentblogger-feedburner"); ?>
			</span>
		</h3>
		<div class="tentblogger-inside inside">
			<?php if($is_updated) { ?>
				<div id="message" class="updated fade">
					<p>
						<?php _e('Feed options updated successfully!', 'tentblogger-feedburner'); ?>
					</p>
				</div>
			<?php } // end if ?>
			<p>
			<?php _e("This simple (yet effective) plugin redirects the your blog's feed to Feedburner (link to my feedburner post here) ! This is strategic because feedburner (link to my feedburner post here) lets you track your readers, analyze trends in your readership, and also allows you to setup email subscriptions and even monetize your feed!", 'tentblogger-feedburner'); ?>
			</p>
			<p>
				<?php _e('WordPress\' native RSS is great but it\'s made even better with <a href="http://tentblogger.com/feedburner-plugin/">FeedBurner</a>!', 'tentblogger-feedburner'); ?>
			</p>
		</div>
		<fieldset>
			<legend>
				<?php _e('Configuration Options', 'tentblogger-feedburner'); ?>
			</legend>
			<form method="post" action="" id="tentblogger-feedburner-configuraton">
				<p>
					<label for="tentblogger-feedburner-feed-url">
						<?php _e('Point My RSS Feed To:', 'tentblogger-feedburner'); ?>
					</label>
					<input type="text" id="tentblogger-feedburner-feed-url" name="tentblogger-feedburner-feed-url" value="<?php echo $options['tentblogger-feedburner-feed-url']; ?>" />
				</p>
				<p>
					<label for="tentblogger-feedburner-comment-url">
						<?php _e('Point My Comment Feed To:', 'tentblogger-feedburner'); ?>
					</label>
					<input type="text" id="tentblogger-feedburner-comment-url" name="tentblogger-feedburner-comment-url" value="<?php echo $options['tentblogger-comment-feed-url']; ?>" />
				</p>
				<p class="submit" id="tentblogger-feedburner-submit">
					<?php wp_nonce_field('tentblogger-feedburner', 'tentblogger-feedburner-admin'); ?>
					<input type="submit" name="submit" value="<?php _e('Redirect My Feeds!', 'tentblogger-feedburner'); ?>" />
				</p>
			</form>
		</fieldset>
		<div class="tentblogger-inside inside">
			<p>
				<?php _e('Feel free to <a href="http://twitter.com/tentblogger" target="_blank">follow me</a> on Twitter!', 'tentblogger-feedburner'); ?>
			</p>
		</div>
	</div>
</div>