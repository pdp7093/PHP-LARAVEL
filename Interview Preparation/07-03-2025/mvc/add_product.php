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
        <h1>Home page</h1>
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
            <h1 class="text-center bg-primary text-white" style="text-decoration:underline;">Add Product</h1>

            <form action="" method="post" class="border border-2 p-3">
                <div class="form-group mb-3">
                    <label for="p_name" class="form-label">Product Name</label>
                    <input type="text" name="p_name" id="" placeholder="Enter Product Name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="p_category">Product Category</label>
                    <input type="text" name="p_category" id="" placeholder="Enter Product Category" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="p_price">Product Price</label>
                    <input type="number" name="p_price" id="" placeholder="Enter Product Price" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" name="submit" value="Submit" class="btn btn-success text-center btn-block" >
                </div>
            </form>
        </div>
    </section>
</body>

</html>