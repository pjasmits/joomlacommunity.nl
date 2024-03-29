<?php
/**
 * @package		EasyDiscuss
 * @copyright	Copyright (C) 2010 Stack Ideas Private Limited. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 *
 * EasyDiscuss is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */
defined('_JEXEC') or die('Restricted access');
?>
<?php echo DiscussHelper::renderModule( 'easydiscuss-before-searchbar' ); ?>
<?php if( $system->config->get( 'layout_toolbar_searchbar' ) ){ ?>
<form id="discuss-searchbar" class="forum-search" name="discuss-search" method="GET" action="<?php echo DiscussRouter::_('index.php?option=com_easydiscuss&view=search'); ?>">
	<div class="row">	
		<div class="col-sm-3">
			<?php if( $system->config->get( 'layout_toolbar_cat_filter' ) ){ ?>
			<?php echo $nestedCategories; ?>
			<?php } ?>
		</div>
		<div class="col-sm-9">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="<?php echo JText::_( 'COM_EASYDISCUSS_SEARCH_PLACEHOLDER' );?>" name="query" value="<?php echo DiscussHelper::getHelper( 'String' )->escape($query) ? DiscussHelper::getHelper( 'String' )->escape($query) : '';?>" />
	
				<span class="input-group-btn">
					<button class="btn btn-success"><?php echo JText::_( 'COM_EASYDISCUSS_SEARCH_BUTTON' );?></button>
				</span>
			</div>
		</div>
	</div>
	<input type="hidden" name="option" value="com_easydiscuss" />
	<input type="hidden" name="view" value="search" />
	<input type="hidden" name="Itemid" value="<?php echo DiscussRouter::getItemId('search'); ?>" />
</form>

<?php } ?>
<?php echo DiscussHelper::renderModule( 'easydiscuss-after-searchbar' ); ?>


<!--
<?php if( $acl->allowed( 'add_question' ) && $system->config->get( 'layout_toolbarcreate' ) ){ ?>
<a class="butt butt-primary butt-ask" href="<?php echo DiscussRouter::getAskRoute( $categoryId );?>"><?php echo JText::_( 'COM_EASYDISCUSS_OR_ASK_A_QUESTION' );?></a>
<?php } else if( $system->my->id == 0 ) { ?>
<a class="butt butt-primary butt-ask" href="<?php echo DiscussHelper::getRegistrationLink();?>"><?php echo JText::_( 'COM_EASYDISCUSS_OR_ASK_A_QUESTION' );?></a>
<?php } ?>
-->