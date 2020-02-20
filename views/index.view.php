<?php require 'partials/head.php' ?>

<h1>Code Gym</h1>

<table class="table table-hover">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>City</td>
    </tr>
    <?php foreach ($listbrands as $brand) : ?>

        <tr>
            <td><?= $brand->brand_id ?></td>
            <td><?= $brand->brand_name ?></td>
            <td><?= $brand->getCity() ?></td>
        </tr>

    <?php endforeach; ?>
</table>


<?php require 'partials/footer.php' ?>