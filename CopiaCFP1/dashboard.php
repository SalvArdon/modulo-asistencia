<?php
include('connection.php');

$object = new connection();

if (!$object->is_login()) {
    header("location:" . $object->base_url . "");
}

include('header.php');

?>


<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Menu Principal</h1>

<!-- Content Row -->
<div class="row">
    <?php
    if ($object->is_master_user()) {
    ?>



    <?php
    }
    ?>
</div>
<?php
include('footer.php');
?>
<script>
    $(document).ready(function() {

        reset_table_status();

        setInterval(function() {
            reset_table_status();
        }, 5000);

        function reset_table_status() {
            $.ajax({
                url: "order_action.php",
                method: "POST",
                data: {
                    action: 'dashboard_reset'
                },
                success: function(data) {
                    $('#table_status').html(data);
                }
            });
        }

    });
</script>
