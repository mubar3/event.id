<?php

function cmb_dinamis($name, $table, $field, $pk, $selected = NULL, $extra = NULL) {
    $ci = &get_instance();
    $cmb = "<select name='$name' class='form-control' $extra>";
    $data = $ci->db->get($table)->result();
    foreach ($data as $row) {
        $cmb .= "<option value='" . $row->$pk . "'";
        $cmb .= $selected == $row->$pk ? 'selected' : '';
        $cmb .= ">" . $row->$field . "</option>";
    }
    $cmb .= "</select>";
    return $cmb;
}

function cmb_dinamis1($name, $table, $field, $pk, $selected = NULL, $extra = NULL) {
    $ci = &get_instance();
    $ci->db->where('nip',$pk);
    $data = $ci->db->get($table)->result();
    foreach ($data as $row) {
        $cmb = "" . $row->$field . "";
    }
    return $cmb;
}

function cmb_dinamis2($name, $table, $field, $pk, $pk1, $selected = NULL, $extra = NULL) {
    $ci = &get_instance();
    $ci->db->where($pk1,$pk);
    $data = $ci->db->get($table)->result();
    foreach ($data as $row) {
        $cmb = "" . $row->$field . "";
    }
    return $cmb;
}

?>
