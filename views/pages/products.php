<?php
/**
 * Created by PhpStorm.
 * User: Chamal
 * Date: 2/3/16
 * Time: 10:30 PM
 */

$_controller = new Products('products');
$_products = $_controller->getProductsCollection();
?>
<?php get_header();?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <?php
            if(isset($_GET['e'])){
                $msg = $_GET['e'];
                if($msg==1){
                    echo "review Has Been Created";
                }
            }
            ?>

            <?php foreach($_products as $_product):?>
                <div class="product-container">
                    <div>SKU: <?php echo $_product['id'];?></div>
                    <p>PRICE: <?php echo $_product['price'];?></p>
                    <h3><?php echo $_product['name'];?></h3>
                    <p><?php echo $_product['description'];?></p>

                    <div class="review-section">
                        <form action="/mvc1/products/addReview" name="reviewForm" method="post" onsubmit="return(validate());">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="tel">Tel</label>
                                <input type="text" class="form-control" id="tel" name="tel" placeholder="Tel">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="review">Review</label>
                                <textarea class="form-control" id="review" name="review" placeholder="Review"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

<script type="text/javascript">
    <!--
    // Form validation code will come here.

    function validateEmail(emailID)
    {

        atpos = emailID.indexOf("@");
        dotpos = emailID.lastIndexOf(".");

        if (atpos < 1 || ( dotpos - atpos < 2 ))
        {
            alert("Please enter correct email ID");
            document.myForm.EMail.focus() ;
            return false;
        }
        return( true );
    }

    function validate()
    {

        if( document.reviewForm.name.value == "" )
        {
            alert( "Please provide your name!" );
            document.reviewForm.name.focus() ;
            return false;
        }

        if( document.reviewForm.email.value == "" )
        {
            alert( "Please provide your Email!" );
            document.reviewForm.email.focus() ;
            return false;
        } else {
            validateEmail(emailID);
        }

        if( document.reviewForm.tel.value == "" )
        {
            alert( "Please provide your country!" );
            document.reviewForm.tel.focus() ;
            return false;
        }

        if( document.reviewForm.address.value == "" )
        {
            alert( "Please provide your country!" );
            document.reviewForm.address.focus() ;
            return false;
        }

        if( document.reviewForm.review.value == "" )
        {
            alert( "please enter review" );
            document.reviewForm.review.focus() ;
            return false;
        }

        return( true );
    }
    //-->
</script>
<?php get_footer();?>
