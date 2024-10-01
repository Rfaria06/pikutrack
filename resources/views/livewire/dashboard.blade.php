<div>
    <h1>Dashboard</h1>
    @foreach($this->expenses as $expense)
        {{$expense->name}} <br>
    @endforeach
</div>
