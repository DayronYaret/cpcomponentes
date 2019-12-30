@include("navBar")

<div class="container">


    <div class="row">
        <div class="col-md-12">
            <h2>
                All Invoices
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            <?php if (count($invoices) > 0) {
            foreach ($invoices as $item){
            ?>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Transaction @ <?php echo $item['created_at'] ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Customer email</th>
                            <th>Customer ID</th>
                            <th>Country code</th>
                            <th>Payment ID</th>
                            <th>Payment Status</th>
                            <th>Price</th>

                        </tr>
                        <tr>
                            <td>
                                <?php echo $item['customer_email']; ?>
                            </td>
                            <td>
                                <?php echo $item['customer_id']; ?>
                            </td>
                            <td>
                                <?php echo $item['country_code']; ?>
                            </td>
                            <td>
                                <?php echo $item['payment_id']; ?>
                            </td>
                            <td>
                                <?php echo $item['payment_status']; ?>
                            </td>
                            <td>
                                <?php echo $item['price'].$item['currency']; ?>
                            </td>
                        </tr>
                        <?php ?>
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
