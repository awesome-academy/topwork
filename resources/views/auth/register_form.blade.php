<div class="jp_regiter_top_heading">
    <p>{{ __('Fields with * are mandetory') }} </p>
</div>
<div class="row">
    <!--Form Group-->
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name', null,['placeholder' => 'Full name*']) !!}
        {!! $errors->first('name', '<span class="red">:message</span>') !!}
    </div>

    <!--Form Group-->
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('user_name', null, ['placeholder' => 'User name*']) !!}
        {!! $errors->first('user_name', '<span class="red">:message</span>') !!}
    </div>

    <!--Form Group-->
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::email('email', null, ['placeholder' => 'Email*']) !!}
        {!! $errors->first('email', '<span class="red">:message</span>') !!}
    </div>
    <!--Form Group-->
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::password('password', ['placeholder' => 'Password*']) !!}
        {!! $errors->first('password', '<span class="red">:message</span>') !!}
    </div>
    <!--Form Group-->
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::password('password', ['placeholder' => 'Re-enter password*']) !!}
        {!! $errors->first('password_confirmed', '<span class="red">:message</span>') !!}
    </div>
    <!--Form Group-->
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('address', null, ['placeholder' => 'Address*']) !!}
        {!! $errors->first('address', '<span class="red">:message</span>') !!}
    </div>
    <!--Form Group-->
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::number('phone', null, ['placeholder' => 'Phone*']) !!}
        {!! $errors->first('phone', '<span class="red">:message</span>') !!}
    </div>
    <!--Form Group-->
    <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input">
        {{ Form::file('avatar_url', ['required' => 'true']) }}
        {!! $errors->first('avatar_url', '<span class="red">:message</span>') !!}
    </div>
    <!--Form Group-->
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        {!! Form::label('Date of birth') !!}<br>
        {!! Form::date('dob', null,['placeholder' => 'Date of birth*', 'class' => 'date_register']) !!}
        {!! $errors->first('dob', '<span class="red">:message</span>') !!}
    </div>

</div>

<div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
    <a href="#" class="btn btn-primary login_btn"> {{ __('register') }} </a>
</div>
<div class="login_message">
    <p>{{ __('Already a member?') }} <a href="#"> {{ __('Login Here') }} </a></p>
</div>
