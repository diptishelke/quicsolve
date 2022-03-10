{{ Form::open(array('url' => 'form.save')) }}
{{Form::token();}}
Name:{{Form::text('name');}}<br/><br/>
Email:{{Form::text('email');}}<br/><br/>
Phone:{{Form::number('phone', 'value');}}<br/><br/>
Age:{{Form::text('age');}}<br/><br/>

City:{{Form::select('city', array(
    array('pune' => 'pune'),
    array('mumbai' => 'mumbai'),
     array('nashik' => 'nashik'),
));}}
State:{{Form::select('state', array(
    array('maharashtra' => 'maharashtra'),
    array('up' => 'up'),
     array('karnatka' => 'karnatka'),
));}}
Pincode:{{Form::text('pincode');}}<br/><br/>
Password:{{Form::password('password');}}

Image:{{Form::file('image');}}
{{Form::submit('save');}}
{{ Form::close() }}



<table>
    <?php if(!empty($forms)){
        
        foreach($forms as $val)  { ?>
    <tr>
        <td>{{ $val->name }}</td>
        <td>{{ $val->email }}</td>
        <td>{{ $val->phone }}</td>
        <td>{{ $val->age}}</td>
        <td>{{ $val->city}}</td>
        <td>{{ $val->state}}</td>
        <td>{{ $val->pincode}}</td>
    </tr>
    <?php } }?>
</table>