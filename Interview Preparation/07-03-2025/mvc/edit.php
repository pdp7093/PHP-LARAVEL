<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <form action="" method="post" class="border border-2 p-3">
        <div class="form-group mb-3">
            <label for="p_name" class="form-label">Product Name</label>
            <input type="text" name="p_name" id="" value="<?php echo $fetch->p_name ?>" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="p_category">Product Category</label>
            <input type="text" name="p_category" id="" value="<?php echo $fetch->p_category ?>" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="p_price">Product Price</label>
            <input type="number" name="p_price" id="" value="<?php echo $fetch->p_price ?>" class="form-control">
        </div>
        <div class="form-group mb-3">
            <input type="submit" name="update" value="Submit" class="btn btn-success text-center btn-block">
        </div>
    </form>
</body>

</html>