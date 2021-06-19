<?php
if(!empty($_SESSION['username'])){
?>
<div class="modal fade" id="orderModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-center">Place Booking</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4">
                    <label for="bookSetDate">Booking date</label>
                    <input type="date" class="form-control form-control-sm" id="bookSetDate" name="bookSetDate">
                </div>
                <div class="col-md-4">
                    <label for="adultQuantity">Person (adult) RM<?php echo $row['pkgPrice']; ?></label>
                    <input type="number" class="form-control form-control-sm" id="adultQuantity" name="adultQuantity" value="0" onchange="calcTotal()">
                    <input type="hidden" id="adultPrice" value="<?php echo  $row['pkgPrice']; ?>">
                </div>
                <div class="col-md-4">
                    <label for="childrenQuantity">Person (children) RM<?php echo $row['pkgChildPrice']; ?></label>
                    <input type="number" class="form-control form-control-sm" id="childrenQuantity" name="childrenQuantity" value="0" onchange="calcTotal()">
                    <input type="hidden" id="chilrenPrice" value="<?php echo  $row['pkgChildPrice']; ?>">
                </div>
                <div class="col-md-6 mt-5">
                    <p class="text-dark text-end" style="font-size:25px">Total: </p>
                </div>
                <div class="col-md-6 mt-5">
                    <p class="text-primary text-success" id="totalPrice" style="font-size:25px">RM0.00</p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="redirectToComfirm()">Yes</button>
        </div>
        </div>
    </div>
</div>
<?php
}else{
?>
<div class="modal" id="orderModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-center">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Please log in to continue.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a href="login.php" class="btn btn-primary">Login</a>
        </div>
        </div>
    </div>
</div>
<?php
}
?>