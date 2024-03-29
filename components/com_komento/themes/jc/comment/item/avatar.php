<?php
/**
 * @package		Komento
 * @copyright	Copyright (C) 2012 Stack Ideas Private Limited. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 *
 * Komento is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

defined( '_JEXEC' ) or die( 'Restricted access' );

if( $system->config->get( 'layout_avatar_enable' ) ) { ?>

	<?php if( $system->config->get( 'layout_avatar_integration' ) == 'gravatar' || !$row->author->guest ) { ?>
		<a class="pull-left" href="<?php echo $row->author->getProfileLink( $row->email ); ?>"<?php if( $system->konfig->get( 'enable_schema' ) ) echo ' itemprop="url"'; ?>>
	<?php } ?>
	<img src="<?php echo $row->author->getAvatar( $row->email ); ?>" class="media-object avatar"<?php if( $system->konfig->get( 'enable_schema' ) ) echo ' itemprop="image"'; ?> />
	<?php if( $system->config->get( 'layout_avatar_integration' ) == 'gravatar' || !$row->author->guest ) { ?>
		</a>
	<?php } ?>

<?php }
