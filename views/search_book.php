

<h1><b>Raamatud</b></h1>

<div class="search_book">
    <form method="post">
        <input type="search" name="search" placeholder="Otsi raamatut..." id="search"/>
    </form>
    <br>

</div>

<br>

<div id="result">
    <table class="search-table">
        <tbody>

        <td>ID</td>
        <td>PEALKIRI</td>
        <td>AUTOR</td>
        <td>ŽANR</td>
        <td>KOGUS</td>

        <tbody>
        <table>
</div>

<script>

    $("#search").keyup(function () {
        var input = $("#search").val();
        $.ajax({
            type: 'POST',
            url: 'controllers/search_book.php',
            data: {
                'search': input
            },
            success: function (data) {
                console.log(data);
                $("#result").html(data);
            }
        });
    });

</script>
