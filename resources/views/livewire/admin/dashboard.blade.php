<div class="p-5 m-5">
    <div class="clearfix mb-2">
        <button wire:click="addSongBtn" class="btn btn-success float-left">Add new song</button>
        <button wire:click="logout" class="btn btn-primary float-right">Logout</button>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Yt Video ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($links as $index => $link)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $link->link }}</td>
                <td>{{ $link->title }}</td>
                <td>{{ $link->description }}</td>
                <td>
                    <button wire:click="edit({{ $link->id }})" class="btn btn-primary">edit</button>
                    <button wire:click="delete({{ $link->id }})" class="btn btn-danger">delete</button>
                </td>
            </tr>
        @empty
            <h2>No songs added</h2>
        @endforelse
        </tbody>
    </table>

    @if(session('saved'))
    <div class="alert alert-primary">
        {{ session('saved') }}
    </div>
    @endif
    @if(session('updated'))
    <div class="alert alert-primary">
        {{ session('updated') }}
    </div>
    @endif

    @if($addsongDiv)
    <div class="w-50 bg-light p-5">
        <form wire:submit.prevent="addSong">
            <div class="form-group">
                <label>Youtube video Id</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Youtube Link" wire:model="link">
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Title" wire:model="title">
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Description</label>
                    <textarea class="form-control" rows="4" wire:model="description"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    @endif
    @if($editSongDiv)
        <div class="w-50 bg-light p-5">
            <form wire:submit.prevent="updateSong">
                <div class="form-group">
                    <input type="text" class="form-control" id="inputAddress" placeholder="Youtube Link" wire:model="editLink">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Title" wire:model="editTitle">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label >Description</label>
                        <textarea class="form-control" rows="3" placeholder="Description" wire:model="editDescription"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    @endif

</div>
