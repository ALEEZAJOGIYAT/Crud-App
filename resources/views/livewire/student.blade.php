<div>
    @if($studentUpdate)
    @include('livewire.edit')
    @else
    @include('livewire.registration')
    @endif

    <h4>Show data</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">School</th>
                <th scope="col">actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $studentData)
            <tr>
                <td>{{ $studentData->id}}</td>
                <td> {{$studentData->name}} </td>
                <td>{{$studentData->email}}</td>
                <td>{{$studentData->school}}</td>
                <td>
                    <button wire:click='delete({{ $studentData->id }})' class="btn btn-danger">delete</button>
                    <button wire:click='edit({{ $studentData->id }})' class="btn btn-secondary">edit</button>
                </td>

            </tr>
            @endforeach

        </tbody>

    </table>

</div>