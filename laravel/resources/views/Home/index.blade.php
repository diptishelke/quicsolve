<form method="post" action="/employe">
{{ csrf_field() }}  
<label>name</label>
    <input type='text' name='name' />

    <label>Email</label>
    <input type='text' name='email' />

    <input type='submit' value="Add" />
</form>