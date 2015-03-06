<?php
// app\Helpers\function.php 
function create_menu_item($menu_name = 'menu', 
							$number_child_items = 0,
							$child_names = ['Menu'],
							$child_links = ['#'],
							$icon_class_menu = 'fa fa-th', 
							$is_active = 0
							){
	if($number_child_items == 0 and $is_active == 0){

        return '<ul class="sidebar-menu">
                    <li>
                        <a>
                            <i class="' . $icon_class_menu . '"></i> <span>' . $menu_name . '</span>
                        </a>
                    </li>
                </ul>';
    } elseif ($number_child_items == 0 and $is_active == 1) {

        return '<ul class="sidebar-menu">
                    <li class="active">
                        <a href="#">
                            <i class="' . $icon_class_menu . '"></i> <span>' . $menu_name . '</span>
                        </a>
                    </li>
                </ul>';
    } else {
        $result = '<ul class="sidebar-menu">';
        $result = $result . '<li class="treeview">
                                <a href="#">
                                    <i class="' . $icon_class_menu . '"></i>
                                    <span>' . $menu_name . '</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                             <ul class="treeview-menu">';
        $total_items = count($child_names);
        for ($i = 0; $i < $total_items; $i++) {
            $result = $result . '<li><a href="' . $child_links[$i] . '" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> '. $child_names[$i] .'</a></li>';
        }

        return $result . '</ul></li></ul>';
    }
}

function create_dashboard_item($icon_class, $color_class, $link = '#', $title = 'Box', $new_notify_number = 0){


	return $result = '<div class="col-lg-3 col-xs-6">
			        <!-- small box -->
			        <div class="small-box ' . $color_class . '">
			            <div class="inner">
			                <h3>
			                    ' . $new_notify_number . '
			                </h3>
			                <p>' . $title . '</p>
			            </div>
			            <div class="icon">
			                <i class="ion ' . $icon_class . '"></i>
			            </div>
			            <a href="' . $link . '" class="small-box-footer">
			                Xem Thêm <i class="fa fa-arrow-circle-right"></i>
			            </a>
			        </div>
			    </div>';

}

function input_text($name, $label, $type = 'text')
{
    $html = '<div class="form-group">';
    $html .= Form::label($name, $label, array('class' => 'col-sm-2 control-label'));
    $html .= ' <div class="col-sm-10">';
    $html .= Form::text($name);
    $html .= '</div></div>';

    return $html;

    return '<div class="form-group">
            <label for="'.$name.'" class="col-sm-2 control-label">'.$label.'</label>
            <div class="col-sm-10">
              <input type="'.$type.'" name="'.$name.'" class="form-control" id="'.$name.'" placeholder="'.$label.'" value="'.$value.'">
            </div>
          </div>';
}

function output_text($label, $value)
{
    return '<label class="col-sm-2 control-label">'.$label.'</label>
            <div class="col-sm-10">'.
              $value
            .'</div><div class="clear"></div>';
}

function input_radio($name, $label, $value = array(), $checked = '')
{
    $html =    '<label class="col-sm-2 control-label">'.$label.'</label>';
    if (!empty($value)) {
        foreach ($$value as $key => $item) {
            if ($checked != '') {
                $check = ($checked == $key) ? 'checked="checked"' : '';
                $html .= '<label class="radio-inline">
                          <input type="radio" name="'.$name.'" id="'.$name.'" value="'.$key.'" '.$checked.'> '.$item.'
                          </label>';
            } else {
                $html .= '<label class="radio-inline">
                          <input type="radio" name="'.$name.'" id="'.$name.'" value="'.$key.'"> '.$item.'
                          </label>';
            }
        }
    }
    return $html;
}

/**
 * Handle upload file
 *
 * @param  Request::file('icon')
 * @return filename
 */
function doUpload($file)
{
    $filename           = $file->getClientOriginalName();
    $destination_path   = public_path(IMAGE_PATH);
    $file->move($destination_path, $filename);

    return $filename;
}
