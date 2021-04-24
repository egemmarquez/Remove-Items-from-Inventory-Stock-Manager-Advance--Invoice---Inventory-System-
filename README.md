# Substract items from inventory
 Custom script created to remove items from the database on a inventory system.
This is a custom script created by me for the software Stock Manager Advance (Invoice & Inventory System) created with codeigniter.

The system has a very good invoice system, but i needed a script to remove items from the inventory when the item has been sent instead of when the item gets fully paid.

This script should be added on the app/models/admin/Sales_model.php

and then call it on the add_delivery function on app/controller/admin/sales.php on the line 1538: 
 
 $this->sales_model->substractfrominventory($dlDetails);
 
 Now. in order to this to work, you need to remove the sync script on the add function (line 365)
 
