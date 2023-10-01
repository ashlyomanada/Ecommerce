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
        <h1>Inventory</h1>
    </div>
    <div class="form-container">
        <form action="/" class="mx-4 my-4">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control mb-4" placeholder="Product name" name="productName">
            <label class="form-label">Product Image</label>
            <input type="file" class="form-control mb-4" placeholder="Product image" name="productImage">
            <label class="form-label">Product Price</label>
            <input type="text" class="form-control mb-4" placeholder="Product price" name="productPrice">
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>

</div>