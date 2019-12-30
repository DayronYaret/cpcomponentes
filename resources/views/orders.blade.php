@include("navBar")

<div class="container">


    <div class="row">
        <div class="col-md-12">
            <h2>
                My Orders
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            <?php if (count($orders) > 0) {
            foreach ($orders as $order){
            ?>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Order @ <?php echo $order['created_at']. "--- Order id:".$order['order_id'] ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Currency</th>
                            <th>Cantidad</th>
                        </tr>

                        <tr>
                            <td>
                                <?php echo $order['product_id']; ?>
                            </td>
                            <td>
                                <?php echo $order['price']; ?>
                            </td>
                            <td>
                                <?php echo "USD"; ?>
                            </td>
                            <td>
                                <?php echo $order['quantity']; ?>
                            </td>
                        </tr>
                        <?php  ?>
                    </table>
                </div>
            </div>

            <?php }
            }else{ ?>
            <p>
                You don't have any orders yet, visit <a href="products.php">Products</a> to order.
            </p>
            <?php }?>

        </div>
    </div>
</div>
