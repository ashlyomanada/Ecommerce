<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>adminCss/style.css">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="navigation">
            <ul>
                <li id="">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name='bag-outline'></ion-icon>
                        </span>
                        <span class="title">Shoe Shop</span>
                    </a>
                </li>
                <li id="dashboardBtn" class="hovered">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li id="messageBtn">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="archive-outline"></ion-icon>
                        </span>
                        <span class="title">Inventory</span>
                    </a>
                </li>
                <li id="customersBtn">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="archive-outline"></ion-icon>
                        </span>
                        <span class="title">New Inventory</span>
                    </a>
                </li>
                <li id="productsBtn">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="file-tray-outline"></ion-icon>
                        </span>
                        <span class="title">Products</span>
                    </a>
                </li>
                <li id="newProductsBtn">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="file-tray-outline"></ion-icon>
                        </span>
                        <span class="title">New Products</span>
                    </a>
                </li>
                <li id="passwordBtn">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="/admin">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!---main---->
        <div class="main">
            <div class="dashboard" id="dashboard">
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
                    <!---search---->
                    <div class="search">
                        <label>
                            <input type="search" placeholder="Search here">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
                    <!---userImg---->
                    <div class="user">
                    </div>
                </div>
                <!---cards---->
                <div class="title-container mx-4">
                    <h1>Dashboard</h1>
                </div>
                <div class="cardBox">
                    <div class="card">
                        <div>
                            <div class="numbers">1,543</div>
                            <div class="cardName">Daily Views</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                    </div>


                    <div class="card">
                        <div>
                            <div class="numbers">400</div>
                            <div class="cardName">Sales</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="cart-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers">567</div>
                            <div class="cardName">Comments</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers">$200</div>
                            <div class="cardName">Earning</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="cash-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>

            <div id="inventory">
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
                    <!---search---->
                    <div class="search">
                        <label>
                            <input type="search" placeholder="Search here">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
                    <!---userImg---->
                    <div class="user">
                    </div>
                </div>
                <div class="title-container mx-4">
                    <h1>Products Inventory</h1>
                </div>
                <div class="form-container">
                    <form action="\save" method="post" class="mx-4 my-4">
                        <input type="hidden" class="form-control mb-4" placeholder="Product name" name="productId">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control mb-4" placeholder="Product name" name="productName">
                        <label class="form-label">Product Image</label>
                        <input type="file" class="form-control mb-4" placeholder="Product image" name="productImage">
                        <label class="form-label">Product Price</label>
                        <input type="text" class="form-control mb-4" placeholder="Product price" name="productPrice">
                        <label class="form-label">Product Star</label>
                        <input type="text" class="form-control mb-4" placeholder="Product price" name="productStar">
                        <input type="submit" value="Save" class="btn btn-success">
                    </form>
                </div>

            </div>

            <div id="newInventory">
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
                    <!---search---->
                    <div class="search">
                        <label>
                            <input type="search" placeholder="Search here">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
                    <!---userImg---->
                    <div class="user">
                    </div>
                </div>
                <div class="title-container mx-4">
                    <h1>New Products Inventory</h1>
                </div>
                <div class="form-container">
                    <form action="\saveNewPro" method="post" class="mx-4 my-4">
                        <input type="hidden" class="form-control mb-4" placeholder="Product name" name="productId">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control mb-4" placeholder="Product name" name="productName">
                        <label class="form-label">Product Image</label>
                        <input type="file" class="form-control mb-4" placeholder="Product image" name="productImage">
                        <label class="form-label">Product Price</label>
                        <input type="text" class="form-control mb-4" placeholder="Product price" name="productPrice">
                        <label class="form-label">Product Star</label>
                        <input type="text" class="form-control mb-4" placeholder="Product price" name="productStar">
                        <input type="submit" value="Save" class="btn btn-success">
                    </form>
                </div>

            </div>

            <div id="products">
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
                    <!---search---->
                    <div class="search">
                        <label>
                            <input type="search" placeholder="Search here">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
                    <!---userImg---->
                    <div class="user">
                    </div>
                </div>
                <div class="title-container mx-4">
                    <h1>Products</h1>
                </div>
                <table class="table table-striped mt-3 mx-4">
                    <thead>
                        <tr>
                            <th scope="col">Products Name</th>
                            <th scope="col">Products Image</th>
                            <th scope="col">Products Price</th>
                            <th scope="col">Products Star</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($name as $productName): ?>
                        <tr>
                            <td><?=$productName['productsName'] ?></td>
                            <td><?=$productName['productsImg'] ?></td>
                            <td><?=$productName['productsPrice'] ?></td>
                            <td><?=$productName['productsStar'] ?></td>
                            <td>
                                <a href="" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#myProducts<?=$productName['productsId'] ?>">Edit</a>
                                <a href="\delete\<?=$productName['productsId'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        <div class="modal" id="myProducts<?=$productName['productsId'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Products</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="\save" method="post">
                                            <input type="hidden" class="form-control mb-4" placeholder="Product name"
                                                name="productId" value="<?=$productName['productsId'] ?>">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" class="form-control mb-4" placeholder="Product name"
                                                name="productName" value="<?=$productName['productsName'] ?>">
                                            <label class="form-label">Product Image</label>
                                            <input type="file" class="form-control mb-4" placeholder="Product image"
                                                name="productImage" value="<?=$productName['productsImg'] ?>">
                                            <label class="form-label">Product Price</label>
                                            <input type="text" class="form-control mb-4" placeholder="Product price"
                                                name="productPrice" value="<?=$productName['productsPrice'] ?>">
                                            <label class="form-label">Product Star</label>
                                            <input type="text" class="form-control mb-4" placeholder="Product price"
                                                name="productStar" value="<?=$productName['productsStar'] ?>">
                                            <input type="submit" value="Save" class="btn btn-success">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div id="newProducts">
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
                    <!---search---->
                    <div class="search">
                        <label>
                            <input type="search" placeholder="Search here">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
                    <!---userImg---->
                    <div class="user">
                    </div>
                </div>
                <div class="title-container mx-4">
                    <h1>New Products</h1>
                </div>
                <table class="table table-striped mt-3 mx-4">
                    <thead>
                        <tr>
                            <th scope="col">Products Name</th>
                            <th scope="col">Products Image</th>
                            <th scope="col">Products Price</th>
                            <th scope="col">Products Star</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($newname as $productName): ?>
                        <tr>
                            <td><?=$productName['productsName'] ?></td>
                            <td><?=$productName['productsImg'] ?></td>
                            <td><?=$productName['productsPrice'] ?></td>
                            <td><?=$productName['productsStar'] ?></td>
                            <td>
                                <a href="" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#myNewProducts<?=$productName['productsId'] ?>">Edit</a>
                                <a href="/deleteNewPro/<?=$productName['productsId'] ?>"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        <div class="modal" id="myNewProducts<?=$productName['productsId'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Products</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="\saveNewPro" method="post">
                                            <input type="hidden" class="form-control mb-4" placeholder="Product name"
                                                name="productId" value="<?=$productName['productsId'] ?>">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" class="form-control mb-4" placeholder="Product name"
                                                name="productName" value="<?=$productName['productsName'] ?>">
                                            <label class="form-label">Product Image</label>
                                            <input type="file" class="form-control mb-4" placeholder="Product image"
                                                name="productImage" value="<?=$productName['productsImg'] ?>">
                                            <label class="form-label">Product Price</label>
                                            <input type="text" class="form-control mb-4" placeholder="Product price"
                                                name="productPrice" value="<?=$productName['productsPrice'] ?>">
                                            <label class="form-label">Product Star</label>
                                            <input type="text" class="form-control mb-4" placeholder="Product price"
                                                name="productStar" value="<?=$productName['productsStar'] ?>">
                                            <input type="submit" value="Save" class="btn btn-success">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="\adminScripts\index.js"></script>

</body>

</html>