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
                    <a href="edit\<?=$productName['productsId'] ?>" class="btn btn-warning">Edit</a>
                    <a href="delete\<?=$productName['productsId'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>