<div class="modal fade ty-modal" id="ty-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thank You</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="#" id="ty_form">
                    {{csrf_field()}}
                    <label for="Q!">Question 1</label>
                    <textarea name="Q1" id="Q1" class="form-control"></textarea>
                    <label for="Q!">Question 1</label>
                    <textarea name="Q2" id="Q2" class="form-control"></textarea>
                    <ul id="validation-errors"></ul>
                    <input type="submit" id="submit" class="form-control">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
