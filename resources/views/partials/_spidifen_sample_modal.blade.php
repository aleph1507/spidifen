<div class="modal fade spidifen-modal" id="spidifen-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Spidifen Sample</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="#" id="sample_form">
                    {{csrf_field()}}
                    <input type="text" name="code" id="code" placeholder="Code" class="form-control" required>
                    <input type="text" name="fullName" id="fullName" placeholder="Full Name" class="form-control" required>
                    <input type="email" name="email" id="email" placeholder="E-mail" class="form-control" required>
                    <input type="text" name="address" id="address" placeholder="Address" class="form-control" required>
                    <div class="cb1">
                        <label for="cb1">Checkbox 1 *</label>
                        <input type="checkbox" name="cb1" id="cb1" required>
                    </div>
                    <div>
                        <label for="cb1">Checkbox 2</label>
                        <input type="checkbox" name="cb2" id="cb2">
                    </div>
                    <div>
                        <label for="cb1">Checkbox 3</label>
                        <input type="checkbox" name="cb3" id="cb3">
                    </div>
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
