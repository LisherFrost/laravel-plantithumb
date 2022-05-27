<!-- Edit Product modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    {{-- <img class="modal-content" id="img01"> --}}

    <!-- details -->
    <div class="card" style="width: 35rem;">
    <img src="https://i.ibb.co/80Y90SW/image.png" class="card-img-top" alt="...">
    <div class="card-body">
        <div class="container">
        <div class="row align-items-start">
            <div class = "col">
            <h5 class="card-title">Plant:</h5>
            <p class="card-text">plant name</p>
            <h5 class="card-title">Type:</h5>
            <p class="card-text">smol</p>
            <h5 class="card-title">Location:</h5>
            <p class="card-text">Old Cabalan</p>
            </div>

            <div class = "col">
            <h5 class="card-title">Price:</h5>
            <p class="card-text">P1500</p>
            <h5 class="card-title">Stock:</h5>
            <p class="card-text">69</p>
            </div>
        </div>
        </div>
    </div>

    <br>

        <h5 class="card-title">Description:</h5>
        <p class="card-text px-4">werwerwerewrewrwerwerrewrewrewrewrwewerrwerwerwe</p>

        <h5 class="card-title">Seller:</h5>
        <p class="card-text px-4">lyn</p>

        <br>

        <!-- button -->
        <div class="container">
        <div class="row align-items-start">
            <!-- col 1 -->
            <div class = "col" style = "margin-left: 15%;">
            <a href="#" class="btn btn-primary mx-4" style = "width: 100%;">Add to Cart</a>
            </div>
            <!-- col 2 -->
            <div class = "col" style = "margin-left: -15%;">
            <i class='btn btn-primary mx-4 bx bx-chat bx-sm' style = "min-width: 10%; background-color:rgb(64, 173, 64)"></i>
            </div>
        </div>
        </div>

        <br><br>

    </div>
</div>




<!-- Edit Profile modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    {{-- <img class="modal-content" id="img01"> --}}

    <!-- details -->
    <div class="card" style="width: 35rem;">
        <form>
            <div class="mb-3">
                

            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label mt-3">Name</label>
            <input type="name" class="form-control" id="exampleInputName1" style = "width: 70%;">
            </div>

            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Location</label>
            <input type="name" class="form-control" id="exampleInputLocation1" style = "width: 70%;">
            </div>

            {{-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}


            <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>
        </form>

    </div>
</div>