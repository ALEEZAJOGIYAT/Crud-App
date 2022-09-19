<div>
    <form>
        <div class='form-row'>
            <input type='hidden' wire:model='studentId' />

            <div>
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" wire:model='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <br>
            <div>
                <label for="exampleInputPassword1">Name</label>
                <input type="text" wire:model='name' class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
            </div>
            <br>
            <div>
                <label for="exampleInputPassword1">School</label>
                <input type="text" wire:model='school' class="form-control" id="exampleInputPassword1" placeholder="Enter School">
            </div>
            <br>
            <div style="padding-top: 29px;">
                <button wire:click.prevent='update' class="btn btn-primary">
                    Update
                </button>

            </div>

        </div>
    </form>

</div>