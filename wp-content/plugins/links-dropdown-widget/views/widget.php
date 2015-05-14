<?php
	$output = ''; $bookmarks = get_bookmarks();
	foreach ($bookmarks as $bookmark) { $output .= '<option value="'.$bookmark->link_url.'">'.$bookmark->link_name.'</option>'; }
?>
<form action="<?php echo get_bloginfo('wpurl'); ?>/wp-content/plugins/links-dropdown-widget/redirect.php" method="GET" target="_blank">
<select id="link-dropdown-widget" name="link-dropdown" onchange="onUserSelectsDictionary()">
	<option value=""><?php echo $default_option ?></option>
	<?php echo $output ?>
</select>

<script>
	function onUserSelectsDictionary () {
		var goButton = document.querySelector("#linkGo");
		var dropdown = document.querySelector("#link-dropdown-widget");
		
		if(dropdown.selectedIndex == 0){
		  goButton.style.backgroundColor = '#f5f5f5';
		  goButton.style.color = "black";
		} else {
			goButton.style.backgroundColor = '#85005B';
			goButton.style.color = "white";
		}	
	}
	
	function onUserClicked() {
		var goButton = document.querySelector("#linkGo");
		goButton.style.backgroundColor = '#f5f5f5';
		goButton.style.color = "black";
		
		var dropdown = document.querySelector("#link-dropdown-widget");
		//Launching the URL for the selected web site
		if(dropdown.selectedIndex > 0){
			var url = dropdown.options[dropdown.selectedIndex].value;
			window.open(url,'_blank');
		}
		
		//How do we turn off the default launch behavior for this widget???
		dropdown.selectedIndex = 0;		
	}
</script><input type="submit" name="btnLinkGo" id=linkGo value="Go" onclick="onUserClicked()">

</form>