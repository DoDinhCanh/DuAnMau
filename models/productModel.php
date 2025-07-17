<?php
class ProductModel extends ConnectDB {
    function get_product_all() {
        $sql="select * from product";
        $dssp = ConnectDB::sql_query_all($sql);
        return $dssp;
    }
}
?>