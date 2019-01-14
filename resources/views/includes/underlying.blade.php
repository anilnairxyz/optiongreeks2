{!! Form::open(['action' => 'PostsController@render', 'method' => 'POST']) !!}
    <ul class="underlying-flex">
    	@if ($title === 'Implied Volatility' || $title === 'Option Price')
        <li>
			{{Form::radio('optiontype', 'Call', Session::get('iscall', true))}} Call Option
			{{Form::radio('optiontype', 'Put', Session::get('isput', false))}} Put Option
        </li>
        <li>
        	{{Form::label('strike', 'Strike Price')}}
            {{Form::number('strike', Session::get('strike', '9200'))}}
        </li>
    	@endif
        <li>
        	{{Form::label('ulprice', 'Underlying Price')}}
            {{Form::number('ulprice', Session::get('ulprice', '9200'))}}
        </li>
        <li>
	        {{Form::label('days', 'Days to Expiry')}}
            {{Form::number('days', Session::get('days', '30'))}}
        </li>
        <li>
	        {{Form::label('rfrate', 'Interest Rate (%)')}}
            {{Form::number('rfrate', Session::get('rfrate', '8'))}}
        </li>
        <li>
	        {{Form::label('divrate', 'Dividend Yield (%)')}}
            {{Form::number('divrate', Session::get('divrate', '0'))}}
        </li>
        <li>
	        {{Form::label('volatility', 'Volatility (%)')}}
            {{Form::number('volatility', Session::get('volatility', '15'))}}
        </li>
    	@if ($title === 'Implied Volatility' || $title === 'Option Price')
        <li>
            {{Form::submit('Calculate')}}
        </li>
        @else
        <li>
            {{Form::submit('Plot')}}
        </li>
        @endif
    </ul>
{!! Form::close() !!}
