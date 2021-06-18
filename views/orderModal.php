<?php
if(!empty($_SESSION['username'])){
?>
<div class="modal" id="orderModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-center">Place order</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Are you sure you want to book this tour?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="placeOrder()">Yes</button>
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