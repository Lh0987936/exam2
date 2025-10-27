<?php
function selectAllProducts() {
    return 'SELECT * FROM products;';
    //Returns all Columns in Products
}

function getCustomerData() {
    return 'SELECT c.first_name, c.last_name, ct.order_count, ct.total_spent FROM customers AS c Join customer_totals AS ct ON ct.customer_id = c.id;'; 
    //Returns by customer their: First name, Lastname, Num of Orders, and Total amnt spent
}