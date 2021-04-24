<?php

//Custom function. This will deduct from the inventory based on the sale id.
public function substractfrominventory($data)    
{
$query = $this->db->get_where('sma_sale_items', array('sale_id =' => $data['sale_id']));
foreach ($query->result() as $row)
{       
       // First Query. This Query will update the sma_prodcuts table, substracting the amount of parts of the invoice
       $this->db->query('UPDATE sma_products SET quantity = quantity - '.$row->quantity.' where id = '.$row->product_id.'');
       //Second Query, This will udpate sma_warehouses_products table, this will keep the warehouses udpated.
       $this->db->query('UPDATE sma_warehouses_products SET quantity = quantity - '.$row->quantity.' where product_id = '.$row->product_id.' and warehouse_id = '.$row->warehouse_id.'');
}
return true;

}

?>