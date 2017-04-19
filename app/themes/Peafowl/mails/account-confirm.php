<?php if(!defined('access') or !access) die('This file cannot be directly accessed.'); ?>
<?php echo G\Render\include_theme_file('mails/header'); ?>

<?php _se('We received a request to register the %n account at %w.', ['%n' => G\get_global('theme_mail')['user']['username'], '%w' => CHV\getSetting('website_name')]); ?>
<br><br>
<?php _se('To complete the process you must <a href="%s">activate your account</a>.', G\get_global('theme_mail')['link']); ?>
<br><br>
<?php _se('Alternatively you can copy and paste the URL into your browser: <a href="%s">%s</a>', ['%s' => G\get_global('theme_mail')['link']]); ?>
<br><br>
<?php _se("If you didn't intend this just ignore this message."); ?>
<br>
<?php _se('This request was made from IP: %s', G\get_client_ip()); ?>

<?php echo G\Render\include_theme_file('mails/footer'); ?>