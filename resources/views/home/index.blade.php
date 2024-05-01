<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Simple App</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <h1 class="display-5">Product Catalog</h1>
        <button type="button" class="btn btn-primary" id="addProduct" data-bs-toggle="modal" data-bs-target="#productModal">
            Add Product
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>

        </table>


                <!-- Button trigger modal -->
       
        
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="productModalLabel">Add Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-control" name="category" id="category">
                                <option value="Web Cam">Web Cam</option>
                                <option value="Computer">Computer</option>
                                <option value="Audio Devices">Audio Devices</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="closeModal" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save">Save changes</button>
                </div>
            </div>
            </div>
        </div>

    </div>
    @vite(['resources/js/app.js'])
</body>
</html>