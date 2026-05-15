</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>

    $("#producrform").submit(function(e){

        e.preventDefault();

        jQuery.ajax({

            url:"?page=products",
            method:post,
            data:$(this).serialize(),

            success:function(response){
                location.reload();
            }
        });
    });
</script>
</body>
</html>