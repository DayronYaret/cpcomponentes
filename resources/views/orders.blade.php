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

            <?php
            if (isset($message) && $message != "") {
                echo '<div class="alert alert-success"><strong>Success: </strong> ' . $message . '</div>';
            }
            ?>

            <?php if (count($orders) > 0) {
            foreach ($orders as $order){
            ?>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Order @ <?php echo $order['created_at'] ?>
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
                        <?php foreach ($order as $item){?>
                        <tr>
                            <td>
                                <?php echo $item['product_id']; ?>
                            </td>
                            <td>
                                <?php echo $item['price']; ?>
                            </td>
                            <td>
                                <?php echo "USD"; ?>
                            </td>
                            <td>
                                <?php echo $item['quantity']; ?>
                            </td>
                        </tr>
                        <?php } ?>
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
