<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$text = '<span class="text-msg">'.$text.'</span>';
$msg = '';
foreach ($lists as $key => $value) {
  $msg .= '<span class="icon-set"><i class="'.$value['icon'].'"></i> '.$value['label'].'</span> ';
}
?>
<div class="mod-txlinks<?php echo $moduleclass_sfx ?>">
<p>
  <?php echo $text .' '. $msg;?>
</p>
</div>
