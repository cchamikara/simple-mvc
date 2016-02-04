<?php get_header(); ?>
<div class="messages" style="color: red; font-weight: bold;">
    <?php
    if(isset($_GET['e'])){
        $msg = $_GET['e'];
        if($msg==1){
            echo "User Has Been Created";
        }
    }
    ?>
</div>
<div class="content">
    <form action="/mvc1/user/create" method="post">
        <p>Name : <input type="text" name="name"></p>
        <p>Age : <input type="text" name="age"></p>
        <p><input type="submit" value="Submit"></p>
    </form>
</div>
<?php get_footer(); ?>