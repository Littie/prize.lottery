<h3>Your prize is points</h3>
<form action="{{ route('prize.points.handle') }}" method="POST">
    {{ csrf_field() }}

    <button class="btn btn-info" name="button" value="transfer">Transfer</button>
    <button class="btn btn-info" name="button" value="refuse">Refuse</button>

</form>
