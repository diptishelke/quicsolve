
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


    
                   
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            <a class="close" data-dismiss="alert">×</a>
                            <strong>Alert </strong> {!!Session::get('success')!!}
                        </div>
                    @endif

                    
                    
                        {{ Form::open(array('url' => 'store')) }}
                           {{Form::token();}}
                           Name:{{Form::text('name');}}<br/><br/>
                                @if ($errors->has('name'))
                                    <span style="color: red;">{{ $errors->first('name') }}</span>
                                @endif
                            
                            Email:{{Form::text('email');}}<br/><br/>
                                @if ($errors->has('email'))
                                    <span style="color: red;">{{ $errors->first('email') }}</span>
                                @endif
                            

                            Phone:{{Form::number('phone', 'value');}}<br/><br/>
                                @if ($errors->has('phone'))
                                    <span style="color: red;">{{ $errors->first('phone') }}</span>
                                @endif
                            

                       

                        Age:{{Form::text('age');}}<br/><br/>

                                @if ($errors->has('age'))
                                    <span style="color: red;">{{ $errors->first('age') }}</span>
                                @endif

                                Address:{{Form::text('address');}}<br/><br/>

                                @if ($errors->has('address'))
                                    <span style="color: red;">{{ $errors->first('address') }}</span>
                                @endif
                            
                              


                            City:{{Form::select('city', array(
                                    array('pune' => 'pune'),
                                    array('mumbai' => 'mumbai'),
                                     array('nashik' => 'nashik'),
                                 ));}}<br></br>
                                @if ($errors->has('city'))
                                    <span style="color: red;">{{ $errors->first('city') }}</span>
                                @endif
                            
                            State:{{Form::select('state', array(
                                   array('maharashtra' => 'maharashtra'),
                                    array('up' => 'up'),
                                    array('karnatka' => 'karnatka'),
                                        ));}}
                                        
                                       
                                       {{Form::select('country', '$countries');}}
                                          <br/>
                                        Pincode:{{Form::text('pincode');}}<br/><br/>
                                        Password:{{Form::password('password');}}

                                @if ($errors->has('password'))<br></br>
                                    <span style="color: red;">{{ $errors->first('password') }}</span>
                                @endif
                           
                            Image:{{Form::file('image');}}<br></br>

                            {{Form::submit('save');}}
                            {{ Form::close() }}
                        


   