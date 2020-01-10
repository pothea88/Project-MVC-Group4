
<div class="container ">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6" style="margin-top:100px;">
           <div class="card">
                <div class="card-header bg-primary">
                    <h2 class="text-center text-white">REQUEST MATERIAL</h2>
                </div>
                <div class="card-body">
                    <form action="index1.php?action=form_request" method="post">
                        <div class="form-group">
                            <label for="name">Name of Material:</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="quanlity">Quanlity:</label>
                            <select name="quanlity" id="quanlity" class="form-control">
                                <option disableed selected>Choose Quanlity</option>
                                <option value="1">High Quanlity</option>
                                <option value="1">Medium Quanlity</option>
                                <option value="1">Low Quanlity</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" name="quantity" id="quantity" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" name="date" id="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="date">Description:</label><br>
                            <textarea class="form-control"></textarea>
                        </div>
                        <a href="index1.php" class="btn btn-first btn-success">Go Back</a>
                        <a href="index1.php?action=message" type="submit" class="btn btn-primary ">Request</a>
                        
                    </form>
                </div>
           </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>