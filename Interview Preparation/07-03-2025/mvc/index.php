<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <header class=" text-center border border-2">
        <h1>Home page <?php echo $_SESSION['email'];?></h1>
        <ul class="nav justify-content-center mt-4">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Add Product">Add Product</a>
            </li>
        </ul>
    </header>

    <section>
        <div class="container mt-4">
            <h1 class="bg-info">Manage Product</h1>

            <table class="table table-hover ">
                <thead>
                    <th>No#</th>
                    <th>Product Name</th>
                    <th>Product Category</th>
                    <th>Product Price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $i=0;foreach ($select as $p) { ?>
                        <tr>
                            <td><?php echo ++$i;?></td>
                            <td><?php echo $p->p_name ?></td>
                            <td><?php echo $p->p_category ?></td>
                            <td><?php echo $p->p_price ?></td>

                            <td>
                                <a href="edit?edit=<?php echo $p->id ?>" class="btn btn-primary">Edit Product</a>
                                <a href="delete?delete=<?php echo $p->id?>" class="btn btn-danger">Delete Product</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </section>
</body>

</html>