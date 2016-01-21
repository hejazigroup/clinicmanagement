<?php
//echo date_default_timezone_get();
echo date('Y-m-d h:m:s');
?>
<link href="<?php echo base_url('../assets/css/bootstrap.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('../assets/css/bootstrap-rtl.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('../assets/css/font-awesome.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('../assets/css/font-awesome.min.css'); ?>" rel="stylesheet" />

<div>
	<select name="meta" id="meta" data-url="<?php echo base_url(); ?>">
		<option value="_">أختر الاعضاء المراد اظهارهم</option>
<?php
	foreach ($meta_name->result_array() as $meta)
		{
			echo '<option value="'.$meta['mt_id'].'">'.$meta['mt_ar_name'].'</option>';
	        
		}	
?>
</select>
    <table class="table table-striped table-hover table-bordered dataTable no-footer" id="editabledatatable" aria-describedby="editabledatatable_info">
        <thead>
            <tr role="row">
                <th>#</th>
                <th class="sorting_asc" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                                    Username
                                                : activate to sort column ascending"
                    style="width: 164px;">الأسم كاملاً 
                </th>
                <th>اسم المستخدم</th>
                <th>كلمة المرور</th>
                <th>
                </ht>
            </tr>
        </thead>
        <tbody id="resultsearch">
			<?php
				foreach ($query->result_array() as $row)
						{
						echo '<tr>
                            <td style="width: 80px;">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" data-val="'.$row['user_id'].'" class="colored-success n'.$row['user_id'].'" name="n'.$row['user_id'].'">
                                        <span class="text">'.$row['user_id'].'</span></label>
                                </div>
                            </td>
                            <td>'
						    .$row['user_full_name'] .'<td>'.$row['user_username'].'</td>
                                <td>'
						    .$row['user_password'] .'</td>
                            </td>
                            <td class=""><a href="" class="btn btn-labeled btn-palegreen"><i class="btn-label glyphicon glyphicon-list"></i>عرض المرضى</a>
                                <a href="#" class="btn btn-labeled btn-yellow EditRooms" style="margin-right: 3px;" data-val="' .$row['user_id']. '" onclick="_editRooms()" data-toggle="modal" data-target="#myModal"><i class="btn-label glyphicon glyphicon-edit"></i>تعديل </a>
                                <a href="#" class="btn btn-labeled btn-darkorange delrooms" style="margin-right: 3px;" data-val="' .$row['user_id']. '"><i class="btn-label glyphicon glyphicon-remove"></i>حذف </a>
                            </td>
                        </tr>';
						}	
			?>
			<tr><td colspan="4"><?php echo 'عدد الاشخاص: '.$query->num_rows();?></td></tr>
		</tbody>
	</table>

</div>
<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/AjaxjQuery/doctor.js"></script>