<!--api key texteditor 6hi1dybxyo7ndy05dqzdztbn0l40e8vaufi8vpu5q52e7nz8

 -->
<?php
	$org_input = "
			<div id='name_orgno_container'>
			<input name='trail_name_value' id='trail_name' placeholder=' Företagsnamn'>
			<input name='org_name_value' id='org_no' placeholder=' xxxxxx-xxxx'></div>
			<label id='site_adress_topic'>Adress</label>
			<div id='site_adress_container'>
			<input id='org_street_value' placeholder='Gatunamn'>
			<input id='org_postno_value' placeholder='Postnummer'>
			<input id='org_city_value' placeholder='Postort'></div>
			<div id='attributes_container'>
			<label id='sites_topic'>Siter</label>
			<div id='att_add_button'></div>
			<div id='added_sites_container'></div>
			</div>
			
			<input type='hidden' name='org_creation_date_value' id='org_creation_date' value='".date('Y-m-d H:i:s')."'> 
			<textarea name='org_info_value' id='org_info_value' placeholder='Ange information om er organisation' ></textarea>
			
			
				


	";

	echo $org_input;