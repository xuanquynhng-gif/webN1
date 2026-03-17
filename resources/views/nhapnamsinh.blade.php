<form action="{{url('tinhtuoi')}}" method = "post">
    Năm sinh: <input type='number' name='year'><br>
    <input type='submit' value='Kết quả'>
    {{ csrf_field() }}
</form>