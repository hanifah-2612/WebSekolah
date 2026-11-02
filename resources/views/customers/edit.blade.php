<h3>Form Edit Customers</h3>
<form action="{{ route('customers.update',$dataeditcustomers->customers_id) }}" method="POST">
    {{ csrf_field() }}
    @method("PUT")
    <label>Customers Name</label>
    <input type="text" name="customers_name" value="{{ $dataeditcustomers->customers_name }}">
    <br>
    <label>Email</label>
    <input type="email" name="email" value="{{ $dataeditcustomers->email }}">
    <br>
    <label>Phone</label>
    <input type="number" name="phone" value="{{ $dataeditcustomers->phone}}">
    <br>
    <label>Address</label>
    <textarea name="address">{{ $dataeditcustomers->address }}</textarea>
    <br>
    <label>Member Status</label>
    <input type="radio" name="member_status" value=1 {{ ($dataeditcustomers->member_status == 1) ? 'checked' : ''}}>Member 
    <input type="radio" name="member_status" value=0 {{ ($dataeditcustomers->member_status == 0) ? 'checked' : ''}}> Non-Member
    </br>
    <button type="submit">Save</button>
    <a href={{ route('customers.index') }}>Cancel</a>
</form>