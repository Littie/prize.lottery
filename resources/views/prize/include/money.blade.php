<h3>Your prize is money</h3>
<form action="{{ route('prize.money.handle') }}" method="POST">
    {{ csrf_field() }}

    <button class="btn btn-info" name="button" value="transfer">Transfer</button>
    <button class="btn btn-info" name="button" value="convert">Convert</button>
    <button class="btn btn-info" name="button" value="refuse">Refuse</button>

</form>
