<?php if (isset($output) && $output->css_files) : ?>
    <?php foreach ($output->css_files as $file) : ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
<?php endif; ?>

<?php echo $output->output; ?>

<?php if (isset($output) && $output->js_files) : ?>
    <?php foreach ($output->js_files as $file) : ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

<style>

</style>

<script>
    $(function() {

        var pathname = window.location.pathname; // Returns path only
        // var url = window.location.href; // Returns full URL
        // var origin = window.location.origin; // Returns base URL

        if(pathname.indexOf('/read/') == -1) // not a read page show all hidden columns
        {
            $("div[id^='updated']").hide();
            $("div[id^='created']").hide();
        }

        $("table[class='display groceryCrudTable dataTable'] td").each(function() {
            $(this).addClass('text-nowrap');
        });
    });
</script>