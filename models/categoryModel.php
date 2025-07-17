<?php
class CategoryModel extends ConnectDB {
    function get_category_all() {
        $sql="select * from category";
        $dsdm = ConnectDB::sql_query_all($sql);
        return $dsdm;
    }
}
?>