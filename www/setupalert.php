<?php

?>
<?php include("top.php")?>
        <form role="form">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" />
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" />
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" placeholder="Enter comic series" />
            </div>
            <div class="form-group">
                <label for="issue">Issue</label>
                <input type="text" class="form-control" id="issue" placeholder="Enter comic issue" />
            </div>
            <div class="form-group">
                <label for="publisher">Publisher</label>
                <input type="text" class="form-control" id="publisher" placeholder="Enter comic publisher" />
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
 <?php include("bottom.php")?>   
