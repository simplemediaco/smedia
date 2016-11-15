<!-- navigation -->
<div class="navigation">
	<div class="container navigation__wrap">
		<a href="http://smstaging.net/simplemedia-new/" class="navigation__logo">
			<img src="dist/img/logo-icon.svg" alt="Simplemedia">
		</a>
		<button class="navigation__hamburger js"><span></span></button>
	</div>
	<div class="navigation__menu js">
		<ul class="navigation__menu-wrap">
			<li class="navigation__menu-item"><a href="<?php echo $_SERVER['HTTP_HOST']; ?>" class="navigation__menu-link font-f-simplifica font-c-white">Home</a></li>
          
            <?php
$menu = $cosmicjs->getMenu();
$menu_list = $menu->object->metafields;
foreach($menu_list as $item)
{
echo $item->value;
?>

<?php } ?>
			<li class="navigation__menu-item"><a href="http://smstaging.net/simplemedia-new/services.php" class="navigation__menu-link font-f-simplifica font-c-white">Services</a></li>
			<li class="navigation__menu-item"><a href="http://smstaging.net/simplemedia-new/order.php" class="navigation__menu-link font-f-simplifica font-c-white">Order</a></li>
			<li class="navigation__menu-item"><a href="http://smstaging.net/simplemedia-new/works.php" class="navigation__menu-link font-f-simplifica font-c-white">Works</a></li>
			<li class="navigation__menu-item"><a href="http://smstaging.net/simplemedia-new/about.php" class="navigation__menu-link font-f-simplifica font-c-white">About</a></li>
			<li class="navigation__menu-item"><a href="http://smstaging.net/simplemedia-new/blog.php" class="navigation__menu-link font-f-simplifica font-c-white">Blog</a></li>
			<li class="navigation__menu-item"><a href="http://smstaging.net/simplemedia-new/faq.php" class="navigation__menu-link font-f-simplifica font-c-white">FAQ</a></li>
			<li class="navigation__menu-item"><a href="http://smstaging.net/simplemedia-new/contact.php" class="navigation__menu-link font-f-simplifica font-c-white">Contact</a></li>
		</ul>
	</div>
</div>
<!-- navigation -->