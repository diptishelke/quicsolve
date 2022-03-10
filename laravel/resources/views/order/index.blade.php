<form method="post" action="{{route('order.save')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="text" name="name" />
    <input type="text" name="email" />
    <input type="text" name="phone" />
    <input type="radio" name="gender" value="male"/>Male
<input type="radio" name="gender" value="female"/>Female
    <input type="submit" value="Add" />
    
</form>

<table>
    <?php if(!empty($orders)){
        
        foreach($orders as $val)  { ?>
    <tr>
        <td>{{ $val->name }}</td>
        <td>{{ $val->email }}</td>
        <td>{{ $val->phone }}</td>
        <td>{{ $val->gender}}</td>
    </tr>
    <?php } }?>
</table>


{{ Form::open(array('url' => 'foo/bar')) }}
{{Form::token();}}
Name:{{Form::text('name');}}<br/><br/>
Email:{{Form::text('email');}}<br/><br/>
Phone:{{Form::number('phone', 'value');}}<br/><br/>
Gender:{{Form::radio('male', 'value');}}
{{Form::radio('female', 'value');}}<br/><br/>
City:{{Form::select('city', array(
    array('pune' => 'pune'),
    array('mumbai' => 'mumbai'),
     array('nashik' => 'nashik'),
));}}


{{Form::submit('Click Me!');}}
{{ Form::close() }}